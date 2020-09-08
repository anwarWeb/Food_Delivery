<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //


    protected $table = 'foods';
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category_id', 'price', 'is_veg', 'is_available', 'description',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

     /**
     * Get all of the tags for the post.
     */
    public function image()
    {
        return $this->morphOne(Image::class,'imageable')->orderBy('created_at', 'desc');
    }
}
