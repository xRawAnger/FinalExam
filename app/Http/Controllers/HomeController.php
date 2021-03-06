<?php

namespace App\Http\Controllers;
use App\Products;
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
        return view('home');
    }
        public function OpenPage(){
        $products=Products::get();
        return view('layouts.landing', ['products'=>$products]);
    }
        public function UserLanding(){
        $products=Products::get();
        return view('layouts.landinguser', ['products'=>$products]);
    }    

}
