<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;
use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class UploadController extends Controller
{

	public function index()
    {

$sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $uploads = Upload::orderBy('created_at', 'desc')->get();

        return view('backend.uploads.index', compact('uploads', 'sl'));
      }

    public function create()
    {


        return view('backend.uploads.create');
    }

    public function store(UploadRequest $request)
    {
       try {        
           

            Upload::create($request->all());

            return redirect()->route('uploads.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
}
     
}
}
