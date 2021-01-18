<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use App\Products;
use Illuminate\Http\Request;
use File;

class ProductsController extends Controller
{
     public function save(Request $request)
    {
        if (Input::file('image')) {
            $dp=public_path('images');
            $filename=uniqid().'.jpg';
            $img=Input::file('image')->move($dp,$filename);
        }
    
    	 Products::create([
        	'title'=>$request->input('title'),
        	'cost'=>$request->input('cost'),
        	'description'=>$request->input('description'),
            'image'=>$filename
        ]);
        return view('layouts.admin');
    }
}
