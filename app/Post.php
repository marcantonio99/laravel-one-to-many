<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
}
