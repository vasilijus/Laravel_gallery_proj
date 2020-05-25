Clone

key:generate

Composer:
    "intervention/image": "^2.5",
    "laravel/telescope": "^3.5",
    "laravel/ui": "^1.0",



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