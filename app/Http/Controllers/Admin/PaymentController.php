<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Payment;
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

    	$pay = Payment::find($request->id);
    	$pay->status =  $request->status;
    	$pay->resi = $request->resi;
    	$pay->save();
    	return redirect()->route('view.payment');

    }
}
