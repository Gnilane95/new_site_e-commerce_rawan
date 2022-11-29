<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BijouargentController extends Controller
{
    public function index()
    {
        $bijoux = Bijou::where('category','Argents')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.bijoux-argents', compact('bijoux'))->with("userId",$userId);
        }
        return view('pages.bijoux-argents', compact('bijoux'));
    }

    public function allArgents()
    {
        $bijoux = Bijou::where('category','Argents')->get();
        return view('pages.all-argents', compact('bijoux'));
    }
}
