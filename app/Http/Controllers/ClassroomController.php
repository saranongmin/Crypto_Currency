<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Image;
class ClassroomController extends Controller
{
	public function index()
    {

$sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $classrooms = Product::orderBy('created_at', 'desc')->get();

        return view('backend.classrooms.index', compact('classrooms', 'sl'));
      }

    public function create()
    {
    	return view('backend.classrooms.create');

    }
    public function store(ProductRequest $request)
    {

    	  try {        
           

            Product::create($request->all());
            return redirect()->route('classrooms.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
     }
    }

     

    
}
