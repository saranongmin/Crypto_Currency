<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClassSignupRequest;
use App\ClassSignup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class ClassSignupController extends Controller
{
     public function create()
    

    {

        return view('frontend.class-signups.create');
    }

    public function store(ClassSignupRequest $request)
    {
      
        try {        
           

            ClassSignup::create($request->all());
            return redirect()->route('class-signups.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
}
}
}
