<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
    ];

    public function users() {
        return $this->belongsto('App\User');
    }
}
