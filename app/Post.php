<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'category_id', 'description'
    ];

    public function category(){
        return $this->belongsTo('App\Category', 'foreign_key');
    }
}
