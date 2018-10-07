<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Invoice;
use App\Payment;
class InvoiceController extends Controller
{
    public function view($id){
    	$invoice  =  Invoice::find($id);
    	return view('user.payment',compact('invoice'));
    }

    public function destroy(Request $request){

    	$invoice =  Invoice::find($request->id);
    	$invoice->delete();
    	return redirect()->route('user.invoice');
    }
    public function payment($id){
    	$pay  =   Invoice::find($id);
    	return view('product.payment',compact('pay'));
    }
}
