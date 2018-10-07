<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filable = ['name','image','color','amount','specification','price','remaing'];
}
