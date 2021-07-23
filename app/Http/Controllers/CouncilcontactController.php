<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CouncilcontactRequest;
use App\Councilcontact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class CouncilcontactController extends Controller
{
    public function create()
    {

    	return view('frontend.councilcontacts.create');
    }
    public function store(CouncilcontactRequest $request)
    {
    	  try {        
           
            Councilcontact::create($request->all());
            return redirect()->route('councilcontacts.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

        }
    }
    
    	public function index()
 {


    $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $councilcontacts = Councilcontact::orderBy('created_at', 'desc')->get();

        return view('frontend.councilcontacts.index', compact('councilcontacts', 'sl'));
 }
    
}
