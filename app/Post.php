<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Many to 1
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
