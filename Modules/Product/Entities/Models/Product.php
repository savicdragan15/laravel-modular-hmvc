<?php

namespace Modules\Product\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'order_num', 'active'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

}
