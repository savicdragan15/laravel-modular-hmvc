<?php

namespace Modules\Product\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = ['name', 'slug', 'parent_id', 'subparent_id', 'seo_title', 'seo_description', 'seo_keywords', 'order_num', 'active'];

    public function subcategories()
    {
        return $this->hasMany('Modules\Product\Entities\Models\ProductCategory', 'parent_id', 'id')->where('subparent_id', null)->orderBy('order_num', 'ASC');
    }

    public function subsubcategories()
    {
        return $this->hasMany('Modules\Product\Entities\Models\ProductCategory', 'subparent_id', 'id')->orderBy('order_num', 'ASC');
    }

    public function products()
    {
      return $this->belongsToMany('Modules\Product\Entities\Models\Product', 'product_categories_pivot', 'product_id', 'category_id');
    }
}
