<?php

namespace Modules\Product\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'featured_image', 'price', 'slug', 'seo_title', 'seo_description', 'seo_keywords', 'order_num', 'active'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    public function allCategories()
    {
      return $this->belongsToMany('Modules\Product\Entities\Models\ProductCategory', 'product_categories_pivot', 'product_id', 'category_id');
    }

    public function categories()
    {
       return $this->belongsToMany('Modules\Product\Entities\Models\ProductCategory', 'product_categories_pivot', 'product_id', 'category_id')->where(['parent_id' => null, 'subparent_id' => null]);
    }

    public function subcategories()
    {
       return $this->belongsToMany('Modules\Product\Entities\Models\ProductCategory', 'product_categories_pivot', 'product_id', 'category_id')->where('subparent_id', null)->where('parent_id', '<>', null);
    }

    public function subsubcategories()
    {
       return $this->belongsToMany('Modules\Product\Entities\Models\ProductCategory', 'product_categories_pivot', 'product_id', 'category_id')->where('parent_id', null)->where('subparent_id', '<>', null);
    }

    public function images()
    {
      return $this->hasMany('Modules\Product\Entities\Models\ProductImage', 'product_id', 'id')->orderBy('order_num', 'ASC');
    }

    public function format($relation)
    {
       $array = [];

       foreach ($this->$relation as $value) {
          $array[] = $value->id;
       }

       return json_encode($array);
    }

    public function getFeaturedImage()
    {
        return !is_null($this->featured_image) ? asset($this->featured_image) : false;
    }

    public function getThumbFeaturedImage()
    {
      $str_to_insert = '/thumbs';
      $pos = strrpos($this->featured_image, "/");

      if(!is_null($this->featured_image)) {
          return substr_replace($this->featured_image, $str_to_insert, $pos, 0);
      }

      return false;

    }

}
