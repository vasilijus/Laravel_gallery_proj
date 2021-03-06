<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Requirements

- Installation request for mockery/mockery 1.4.0 -> satisfiable by mockery/mockery[1.4.0].
- mockery/mockery 1.4.0 requires php ^7.3.0 -> your PHP version (7.2.24) does not satisfy that requirement.


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Help 

## Logo creator
https://hatchful.shopify.com/onboarding/select-logo

ln -s = php artisan storage:link 
```
php artisan storage:link
The [public/storage] directory has been linked.
```
 - Location - http://localhost:8000/storage/uploads/image.png

Remove * posts 
via tinker:
```
Post::truncate()
```


PHP Image library ( need to pull it )
```
composer require intervention/image
```
Automatic Discovery
 - Discovered Package: intervention/image
## To use it 
use Intervention\Image\Facades\Image;

$image = Image::make(public_path("storage/{$imagePath}") )->fit(1200, 1200);
$image->save();

### To make the user able to edit only his own profile
```
artisan make:policy ProfilePolicy -m Profile

public function update(User $user, Profile $profile)
{
	return $user->id == $profile->user_id;
}
```


### Create a profile , when a new user registers

```
// init when the User class is called ( on registration of new user )
protected static function boot()
{
	parent::boot();

	static::created( function ($user) {
		$user->profile()->create([
			'title' => $user->username,
		]);
	});
}
```

### Pivot Table 

php artisan make:migration creates_profile_user_pivot_table --create profile_user

PROFILE:
	// 1 to 1 relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
USER:
	// 1 to 1 relation
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }



### Telescope
```
   composer require larave/telescope
   php artisan telescope:install
   php artisan migrate
   localhost:8000/telescope
```

### Mail
Using Mailtrap mail service:

Illuminate\Support\Facades\Email

php artisan make:mail NewUserWelcomeMail -m emails.welcome-email

After changing .env -> restart server

### MAIL Problems 


Mail is an alias inside the global namespace. When you want to reference it from inside a namespace (like App\Http\Controllers in your case) you have to either:

Prepend a backslash:

\Mail::send(...)

Or add a use statement before your class declaration:

namespace App\Http\Controllers;

use Mail;  // <<<<

class MyController extends Controller {

The same goes for the other facades you use. Like Session and Redirect.


### /