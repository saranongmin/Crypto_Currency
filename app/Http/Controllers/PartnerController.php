<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Http\Requests\PartnerRequest;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class PartnerController extends Controller
{
    public function index()
    {
 $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $partners = Partner::orderBy('created_at', 'desc')->get();

        return view('backend.partners.index', compact('partners', 'sl'));
    }
    public function create()
    {
    	return view('backend.partners.create');

    }
    public function store(PartnerRequest $request)
    {
    	 try {        
           

            // Team::create($request->all());
            $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->image, $request->title);
            }
            Partner::create($data);

            return redirect()->route('partners.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

    }
}
 private function uploadImage($file, $name)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file_name = $timestamp .'-'.$name. '.' . $file->getClientOriginalExtension();
        $pathToUpload = storage_path().'/app/public/partners/';
        Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/partners/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }
}
