<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    // It is alright , because the validation is good in the profile controller
    protected $guarded = [];

    // 1 to 1 relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
