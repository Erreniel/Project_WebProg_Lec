<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function showSignUp(){
        return view('signUp');
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|min:3',
            'dob'=> 'required||date|before:-17 years',
            'password' => 'required|min:6',
        ]);
        $newUser = new User();
        $newUser->email = $request->input('email');
        $newUser->name = $request->input('name');
        $newUser->dob =$request->input('dob');
        $newUser->password = Hash::make($request->input('password'));
        $newUser->role = 'User';
        $newUser->save();

        return redirect()->route('login');

    }

    public function showLogin(){
        return view('login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        if(!Auth::attempt($credential)){
            return redirect()->back()->withErrors('Wrong email or password');
        }
        return redirect()->route('home');
    }

    public function viewProfile(){
        $user = User::find(Auth::user()->id);
        return view('profile', compact('user'));
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
    // public function pageSearch(Request $request)
    // {
    //     $jobs = Job::where('name', 'LIKE', "%$request->search%");

    //     return view('jobUser', [
    //         "page" => "Search",
    //         "jobs" => $jobs
    //     ]);
    // }

    // public function logout(){
    //     Auth::logout();
    //     return redirect()->route('login');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
