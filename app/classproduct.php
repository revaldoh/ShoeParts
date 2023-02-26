<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classproduct extends Model
{
    protected $table = "class_product";
    protected $primarykey =  "id";
    protected $fillable = ['id','product_class'] ;
}
