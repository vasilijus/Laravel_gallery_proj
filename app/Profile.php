<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // 1 to 1 relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
