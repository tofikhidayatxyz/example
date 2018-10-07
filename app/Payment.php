<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $filable = ['user_id','product_id','invoice','price','status','bank','image','name','rekening','resi'];


    public function invoices(){
    	return $this->hasMany('App\Invoice','product_id');
    }


    public function users(){
    	return $this->belongsToMany('App\User');
    }
    public function user(){
    	return $this->hasOne('App\User','id','user_id');
    }
}
