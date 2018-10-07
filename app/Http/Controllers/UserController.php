<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Invoice;
use App\Payment;


class UserController extends Controller
{
    public function index(){
     	return view('user');
     }
     public function view($id){
     	$product =  Product::find($id);
     	return view('product.view',compact('product'));
     }
     public function invoice(){
     	$invoice = Invoice::paginate(10);
     	return view('product.invoice',compact('invoice'));
     }
      

}
