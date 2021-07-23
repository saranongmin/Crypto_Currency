<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exchange;
use App\Http\Requests\ExchangeRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class ExchangeController extends Controller
{
    public function create()
    {
    	return view('frontend.exchanges.create');
    }

    public function store(ExchangeRequest $request)
    {

        try {        
           

            Exchange::create($request->all());
            return redirect()->route('exchanges.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

        }
    }
    public function index()
 {


    $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $exchanges = Exchange::orderBy('created_at', 'desc')->get();

        return view('frontend.exchanges.index', compact('exchanges', 'sl'));
 }
}
