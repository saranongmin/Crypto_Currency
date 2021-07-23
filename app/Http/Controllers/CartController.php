<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        return view('frontend.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        // dd($cartCollection);
        return view('frontend.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart')->with('success_msg', 'Course is Added to Cart!');
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart')->with('success_msg', 'Course is removed!');
    }


    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart')->with('success_msg', 'Cart is Updated!');
    }
    public function clear(Request $request){
        \Cart::clear($request->id);
        return redirect()->route('cart')->with('success_msg', 'Cart is cleared!');
    }
}
