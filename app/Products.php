<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table='products';
    protected $fillable=[
      'name','origin','guarantee','unit_pr','promotion_pr','status','avatar','number','size','producer','active','content','hot'
    ];
}
