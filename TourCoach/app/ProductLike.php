<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLike extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','tourId','userId','date'];
}
