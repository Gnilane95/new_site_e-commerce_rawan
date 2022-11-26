<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $user= User::find($user->id);
        return view('pages.home', compact('user'));
    }
    /**
    * Return all users view
    *
    * @return void
    */
    public function allUsers()
    {
        $user = User::all();
        
        return view('pages.all-users', compact('user'));
    }

    public function show(User $user)
    {
        $user = Auth::user();
        $userId=$user->id;
        return view('pages.users-profil', compact('user'))->with("userId",$userId);
    }

    public function edit(User $user)
    {
        $user = Auth::user();
        $userId=$user->id;
        return view('pages.edit-user', compact('user'))->with("userId",$userId);
    }
    public function update(Request $request,User $user)
    {
        $request->validate([
            'email' => ['required', 'string','sometimes', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => 'datetime',
        ]);

        return redirect()
        ->route('users.show',$user->id)
        ->with('status', 'Vos données ont bien été modifiées');
    }
}
