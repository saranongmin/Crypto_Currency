<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Newsletter;
use App\Http\Requests\NewsletterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class NewsletterController extends Controller
{
    public function index()
    {
   $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $newsletters = Newsletter::orderBy('created_at', 'desc')->get();

        return view('frontend.newsletters.index', compact('newsletters', 'sl'));
    }
    public function create()
   {
   	return view('frontend.newsletters.create');
   }
   public function store(NewsletterRequest $request)
   {


    	  try {        
           

            Newsletter::create($request->all());
            return redirect()->route('newsletters.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
     }

   }
}
