<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class coffee extends Model
{
    protected $table ='coffees';

    protected $fillable =[
        'name',
        'price',
        'quantity',
        'weight',
        'picture'
    ];
}
