<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class ContactController extends Controller
{
    	public function index()
    {

$sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $contacts = Contact::orderBy('created_at', 'desc')->get();

        return view('frontend.contacts.index', compact('contacts', 'sl'));
      }

    public function create()
    {
    	return view('frontend.contacts.create');

    }
    public function store(ContactRequest $request)
    {

    	  try {        
           

            Contact::create($request->all());
            return redirect()->route('contacts.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
     }
    }

     
}
