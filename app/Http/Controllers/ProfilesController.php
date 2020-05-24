<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

// use Illuminate\Support\Facades\Auth; // Getting the user
use Auth; // Samve as above

use App\User;

class ProfilesController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // dd(Auth::user());
        // $user = Auth::user(); // would give the details of the logged in user.... 
        return view('profiles.show')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        //
        // $user = Auth::user();
        // $user = auth();
        // $user = User::findOrFail($user); // findOrFail - will output 404
        return view('profiles.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $this->authorize('update', $user->profile);

        return view('profiles.edit', compact('user'));
        // dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
        //
        $this->authorize('update', $user->profile);
        
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' =>  'url',
            'image' => ''
        ]);


        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
            $image->save();

            $imageArray = ['image' => $imagePath ];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? [] // if not set , default to empty array
        ));

        return redirect("/profile/{$user->id}");
        // dd($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
