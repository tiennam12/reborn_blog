<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    public function users() {
        return $this->belongsto('App\User');
    }

    public function post() {
        return $this->belongsToMany(Post::class, 'tag_post');
    }
}
