<?php

namespace Modules\News\Entities\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['name', 'name_secondary', 'slug', 'short_text', 'long_text', 'featured_image', 'seo_title', 'seo_description', 'seo_keywords', 'publish_date', 'featured', 'author_id', 'last_user_edit', 'active'];

    public function author()
    {
      return $this->hasOne('App\Admin', 'id', 'author_id');
    }

    public function allCategories()
    {
      return $this->belongsToMany('Modules\News\Entities\Models\NewsCategory', 'news_categories_pivot', 'article_id', 'category_id');
    }

    public function categories()
    {
       return $this->belongsToMany('Modules\News\Entities\Models\NewsCategory', 'news_categories_pivot', 'article_id', 'category_id')->where(['parent_id' => null, 'subparent_id' => null]);
    }

    public function subcategories()
    {
       return $this->belongsToMany('Modules\News\Entities\Models\NewsCategory', 'news_categories_pivot', 'article_id', 'category_id')->where('subparent_id', null)->where('parent_id', '<>', null);
    }

    public function subsubcategories()
    {
       return $this->belongsToMany('Modules\News\Entities\Models\NewsCategory', 'news_categories_pivot', 'article_id', 'category_id')->where('parent_id', null)->where('subparent_id', '<>', null);
    }


    public function format($relation)
    {
       $array = [];

       foreach ($this->$relation as $value) {
          $array[] = $value->id;
       }

       return json_encode($array);
    }
}
