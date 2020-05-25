<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    // It is alright , because the validation is good in the profile controller
    protected $guarded = [];

    public function profileImage()
    {
        // default image or if given by user
        $imagePath =  ($this->image) ? $this->image : 'profile/temp-profile.png';
        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    // 1 to 1 relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
