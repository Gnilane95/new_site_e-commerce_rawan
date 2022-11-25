<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BijoupersoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId=$user->id;
        $bijoux = Bijou::where('category','Bijoux personalisés')->get();
        return view('pages.bijoux-perso', compact('bijoux'))->with("userId",$userId);
    }
}
