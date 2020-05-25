<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // init when the User class is called ( on registration of new user )
    protected static function boot()
    {
        parent::boot();

        static::created( function ($user) {
            $user->profile()->create([
                'title' => $user->username,
            ]);

            Mail::to($user->email)->send( new \App\Mail\NewUserWelcomeMail() );
            // Mail::to($user)->send(new NewUserWelcomMail());
        });
    }


    // 1 to Many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function following()
    {
        return $this->belongsToMany(Profile::class);
    }

        // 1 to 1 relation
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    
}
