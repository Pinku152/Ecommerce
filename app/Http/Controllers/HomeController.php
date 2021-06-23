<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('home',['categories'=>$categories,'products'=>$products]);
        //return view('home');
    }
    public function adminHome()
    {
        //return view('adminHome');
        return view('admin.dashboard');
    }

    public function contact(){
        $categories = Category::all();
        $products = Product::all();
        return view('contact',['categories'=>$categories,'products'=>$products]);
    }
    public function blog(){
        $categories = Category::all();
        $products = Product::all();
        return view('blog',['categories'=>$categories,'products'=>$products]);
    }
    public function about(){
        $categories = Category::all();
        $products = Product::all();
        return view('about',['categories'=>$categories,'products'=>$products]);
    }
}
