<?php

namespace Modules\Product\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['name', 'product_id', 'order_num', 'active'];
}
