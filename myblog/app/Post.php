<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = ['title', 'body'];

    public function comments() {// postに対してコメントは複数持っているのでcommentsになっている
        return $this->hasMany('App\Comment');
    }
}
