<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
        'parent_id',
        'content',
    ];

    public function post() {
    	return $this->belongsTo('App\Post');
    }

    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function getComment($id) {
        $comment = Comment::where('post_id', $id)->with('user')->orderBy('created_at', 'desc')->first();

        return $comment;
    }
}
