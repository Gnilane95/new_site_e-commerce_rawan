<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // dd($user);
        $userId=$user->id;
        // dd($userId);
        return view('pages.users-profil', compact('user'))->with("userId",$userId);
    }
}
