<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class FrontendController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}
    public function getstarted()
    {
    	return view('frontend.get-started');
    }
    public function payments()
    {
    	return view('frontend.payments');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function blog()
    {
        return view('frontend.blog');
    }
    public function blogDetails(Blog $blog)
    {
     $blogs  = Blog::latest()->take(3)->get();
        return view('frontend.blog-details', compact('blog','blogs'));
    }

    public function work()
    {
        return view('frontend.work');
    }
}
