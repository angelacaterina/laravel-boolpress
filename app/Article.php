<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'subtitle', 'body', 'author'];

   /**
    * Get the category associated with the Article
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
   public function category()
   {
       return $this->belongsTo('App\Category');
   }
}
