<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the author that owns the post.
     */
    public function author()
    {
        return $this->belongsTo('App\User', 'created_by', 'id');
    }
}
