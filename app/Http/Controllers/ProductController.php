<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Image;
class ProductController extends Controller
{
	public function index()
    {

$sl = !is_null(\request()->page) ? (\request()->page -1 )* 10 : 0;

        $products = Product::orderBy('created_at', 'desc')->get();

        return view('backend.products.index', compact('products', 'sl'));
      }

    public function create()
    {
    	return view('backend.products.create');

    }
    
 public function store(ProductRequest $request)
    {

    	  try {        
          
            Product::create($request->all());
            return redirect()->route('products.create')->withStatus('Your Information is Uploaded  Successfully !');
        }catch (QueryException $e){
          return redirect()->back()->withInput()->withErrors($e->getMessage('Created Successfully !'));
    

       
     }
    }
     
public function edit(Product $product)
{
return view('backend.products.edit', compact('product'));

}
public function update(ProductRequest $request,Product $product)
{
    try{
            $product->update($request->all());
            return redirect()->route('products.index')->withStatus('Updated Successfully !');
        }catch (QueryException $e){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
}
    
}
