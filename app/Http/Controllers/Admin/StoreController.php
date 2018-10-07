<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Auth;
use Storage;
class StoreController extends Controller
{
	public function index(){
		$product = Product::paginate(12);
		return view('admin.list',compact('product'));
	}
	public function add(){
		return view('admin.create');
	}
    public function store(Request $request){
    	
    	$this->validate($request,[
    		'name'=>'required|min:5',
    		'image'=>'file|image|required|mimes:jpg,png,svg,jpeg|max:2048',
    		'amount'=>'required|integer',
    		'price'=>'required|integer',
    		'color'=>'required',
    		'brand'=>'required',
    		'specification'=>'required',
    		'remaining'=>'required|integer',
    	]);

    	$file_name = time().$request->image->getClientOriginalName();
    	$file = $request->file('image');
    	$file->storeAs('public',$file_name);

    	$create = new Product();
    	$create->name =  $request->name;
    	$create->image =  $request->image;
    	$create->amount =  $request->amount;
    	$create->price =  $request->price;
    	$create->color =  $request->color;
    	$create->brand =  $request->brand;
    	$create->image = $file_name;
    	$create->specification =  $request->specification;
    	$create->remain =  $request->remaining;
    	$create->save();
    	return route('admin.list');

    }


    public function edit(Request $request , $id){
    	$product = Product::find($id);
    	return view('admin.edit',compact('product','id'));
    }

    public function update(Request $request){

    	$id = $request->id;
    	if($request->file('image')){
		$file_name = time().$request->image->getClientOriginalName();
    	$file = $request->file('image');
    	$file->storeAs('public',$file_name);
    	$upd->image = $file_name;
    	}

    	$upd =  Product::find($id);
    	$upd->name =  $request->name;
    	$upd->image =  $request->image;
    	$upd->amount =  $request->amount;
    	$upd->price =  $request->price;
    	$upd->color =  $request->color;
    	$upd->brand =  $request->brand;
    	$upd->specification =  $request->specification;
    	$upd->remain =  $request->remaining;
    	$upd->save();
    	return route('admin.list');
    }

    public function destroy(Request $request){
    	$id = $request->id;
    	$del =  Product::find($id);
    	$del->delete();
    	return route('admin.list');
    }


}
