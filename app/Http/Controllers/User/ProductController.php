<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Invoice;
use App\Product;

class ProductController extends Controller
{
    public function store(Request $request){
    	$invoice = new Invoice();
    	$invoice->user_id =  Auth::user()->id;
    	$invoice->product_id = $request->id;
    	$invoice->invoice = "INV".date('ymdhims').Auth::user()->id.$request->id;
    	$invoice->amount =  $request->amount;
    	$invoice->price  = Product::find($request->id)->price * $request->amount;
    	$invoice->time = date('y:m:d:h:I:s');
    	$invoice->status =  "buy";
    	$invoice->save();
    	return redirect()->route('user.invoice');

    }
}
