<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index(){
     	return view('administrator');
     } 
     public function create(){
     	return view('admin.create');
     }  public function userList(){
     	$users =  User::whereHas('roles',function($e){
     		$e->where('name','user');
     	})->paginate(4);
     	return view("admin.user",compact('users'));
     }
}
