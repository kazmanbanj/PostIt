<?php

namespace App;

use App\Post;
use App\User;
use App\Model;

class Comment extends Model
{
    //  comment->post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
