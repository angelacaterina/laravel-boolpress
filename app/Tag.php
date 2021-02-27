<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'views', 'topic'];

    /**
     * The articles that belong to the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function articles(): BelongsToMany
    {
        return $this->belongsToMany('App\Article');
    }
}
