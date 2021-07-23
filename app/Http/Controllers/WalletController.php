<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use App\Http\Requests\WalletRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class WalletController extends Controller
{

 public function index()
 {


    $sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $wallets = Wallet::orderBy('created_at', 'desc')->get();

        return view('frontend.wallets.index', compact('wallets', 'sl'));
 }
 
      public function create()
    

    {

        return view('frontend.wallets.create');
    }

    public function store(WalletRequest $request)
    {
      
        try {        
           

            Wallet::create($request->all());
            return redirect()->route('wallets.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

        }
    }  
}
