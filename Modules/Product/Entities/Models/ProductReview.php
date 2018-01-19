<?php

namespace Modules\Product\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    protected $fillable = [];

    public function product()
    {
        return $this->hasOne('Modules\Product\Entities\Models\Product', 'id', 'product_id');
    }
}
