<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $guarded = ['id'];
}
