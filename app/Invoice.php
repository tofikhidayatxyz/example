<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $filable = ['user_id','product_id','amount','price','time'];




    public function products(){
    	return $this->belongsToMany('App\Product');
    }  
    public function product(){
    	return $this->hasOne('App\Product','id','product_id');
    }

    public function payments(){
    	return $this->belongsToMany('App\Payment');
    }
    public function payment(){
    	return $this->hasOne('App\Payment','product_id','product_id');
    }
}
