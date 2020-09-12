<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

     /**
     * Get the post that owns the comment.
     */
    public function food()
    {
        return $this->belongsTo('App\Food');
    }
}
