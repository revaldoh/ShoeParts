<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = "product";
    protected $primarykey =  "id";
    protected $fillable = ['id','nama','product_class','product_group','harga','qty','img','deskripsi'] ;
}

