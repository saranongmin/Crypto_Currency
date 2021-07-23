<?php


namespace App\Http\View\Composers;

use App\Classroom;
use App\Product;
use App\Team;
use App\Partner;
use App\Investor;
use App\Blog;
use Illuminate\Support\Facades\Cookie;
use Illuminate\View\View;


class FrontendComposer
{

    public function compose(View $view)
    {
        $classrooms  = Classroom::latest()->take(6)->get();
        $products = Product::latest()->take(12)->get();
        $teams = Team::latest()->take(12)->get();
        $partners = Partner::latest()->take(12)->get();
        $investors = Investor::latest()->take(12)->get();
$blogs = Blog::latest()->take(12)->get();
        $view->with(compact('classrooms','products','teams','partners','investors','blogs'));
    }

}
