<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupproduct extends Model
{
    protected $table = "group_product";
    protected $primarykey =  "id";
    protected $fillable = ['id','product_group'] ;
}
