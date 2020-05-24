<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        // dd(Auth::user());
        $user = Auth::user();
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
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' =>  'url',
            'image' => ''
        ]);


        // $user->profile->update($data);
        auth()->user->profile->update($data);
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
