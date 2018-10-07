<?php

namespace App\Http\Controllers;
use Storage;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function view($image){
    	return Storage::disk('product')->response($image);
    }
}
