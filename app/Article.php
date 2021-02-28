<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'subtitle', 'body', 'author', 'category_id'];

   /**
    * Get the category that owns the Article
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function category()
   {
       return $this->belongsTo('App\Category');
   }

   /**
    * The tags that belong to the Article
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
    */
   public function tags()
   {
       return $this->belongsToMany('App\Tag');
   }
}
