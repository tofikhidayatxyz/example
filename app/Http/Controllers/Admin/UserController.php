<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class UserController extends Controller
{
    public function edit($id){
    	$user  =  User::find($id);
    	return view('admin.user-edit',compact('user',$id));
    }  

    public function update(Request $request){
    	$user = User::find($request->id);
    	$user->name =  $request->name;
    	$user->address = $request->address;
    	$user->email =  $request->email;
    	$user->phone =  $request->phone;
    	$user->province = $request->province;
    	$user->save();
    	return redirect()->route('admin.user');
    }
}
