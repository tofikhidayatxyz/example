<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;
use App\Payment;
class PaymentController extends Controller
{
    public function store(Request $request){

    	$this->validate($request,[
    		'price'=>'required|integer',
    		'bank'=>'required',
    		'image'=>'required|file|image',
    		'name'=>'required',
    		'rekening'=>'required'
    	]);

    	$file_name =  date("ymdhis").$request->image->getClientoriginalName();
    	$file =  $request->file('image');
    	$file->storeAs('confirmation',$file_name);

    	$add = new Payment();
    	$add->name =  $request->name;
    	$add->user_id  = Auth::user()->id;
    	$add->rekening =  $request->rekening;
    	$add->invoice = $request->invoice;
    	$add->status = "waiting";
    	$add->bank =  $request->bank;
    	$add->image =  $file_name;
    	$add->price =  $request->price;
    	$add->product_id =  $request->product_id;
    	$add->save();
    	return redirect()->route('user.invoice');

    }
}
