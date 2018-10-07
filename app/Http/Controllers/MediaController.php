<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function view($image){
    	return Storage::disk('product')->response($image);
    }


    public function viewConfirmation($image) {
    	return Storage::disk('confirmation')->response($image);
    }
}
