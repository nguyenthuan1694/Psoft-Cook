<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPromotion extends Model
{
    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $table = 'product_promotion';
}
