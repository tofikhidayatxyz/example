<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class FrontendController extends Controller
{
    public function index(){
    	$product  =  Product::paginate(12);
    	return view('index',compact('product'));
    }
}
