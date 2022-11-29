<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BijoupersoController extends Controller
{
    public function index()
    {
        $bijoux = Bijou::where('category','Bijoux personalisés')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.bijoux-perso', compact('bijoux'))->with("userId",$userId);
        }
        return view('pages.bijoux-perso', compact('bijoux'));
    }
}
