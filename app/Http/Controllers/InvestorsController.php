<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InvestorRequest;
use App\Investor;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class InvestorsController extends Controller
{
     public function index()
    {
 $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $investors = Investor::orderBy('created_at', 'desc')->get();

        return view('backend.investors.index', compact('investors', 'sl'));
    }
    public function create()
    {
    	return view('backend.investors.create');

    }
    public function store(InvestorRequest $request)
    {
    	 try {        
           

            // Team::create($request->all());
            $data = $request->all();
            if ($request->hasFile('image')) {
                $data['image'] = $this->uploadImage($request->image, $request->title);
            }
            Investor::create($data);

            return redirect()->route('investors.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

    }
}
 private function uploadImage($file, $name)
    {
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
        $file_name = $timestamp .'-'.$name. '.' . $file->getClientOriginalExtension();
        $pathToUpload = storage_path().'/app/public/investors/';
        Image::make($file)->resize(634,792)->save($pathToUpload.$file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        $pathToUpload = storage_path().'/app/public/investors/';
        if ($file != '' && file_exists($pathToUpload. $file)) {
            @unlink($pathToUpload. $file);
        }
    }
}
