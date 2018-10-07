<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Product;
use App\Payment;
use App\Invoice;
class PaymentController extends Controller
{
    public function view(){
    	$pay = Payment::paginate(10);
    	return view('admin.confirmation',compact('pay'));
    }
    public function edit($id){
    	$pay =  Payment::find($id);
    	return view('admin.payment-edit',compact("pay"));
    }

    public function update(Request $request){
        $status = $request->status;
    	$pay = Payment::find($request->id);
    	$pay->status = $status ;
    	$pay->resi = $request->resi;
        if($status =  "send"){

            return Invoice::where('id',1)->id;
        }
    	$pay->save();
    	return redirect()->route('view.payment');

    }
}
