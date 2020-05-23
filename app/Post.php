<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //every thing is ok , do not guard anything ( not nescessary to add $fillables [] )
    protected $guarded = [];


    // Many to 1
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
