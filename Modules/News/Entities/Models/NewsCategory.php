<?php

namespace Modules\News\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $fillable = [];

    public function subcategories()
    {
        return $this->hasMany('Modules\News\Entities\Models\NewsCategory', 'parent_id', 'id')->where('subparent_id', null)->orderBy('order_num', 'ASC');
    }

    public function subsubcategories()
    {
        return $this->hasMany('Modules\News\Entities\Models\NewsCategory', 'subparent_id', 'id')->orderBy('order_num', 'ASC');
    }

    // public function products()
    // {
    //   return $this->belongsToMany('Modules\Product\Entities\Models\Product', 'product_categories_pivot', 'product_id', 'category_id');
    // }

}
