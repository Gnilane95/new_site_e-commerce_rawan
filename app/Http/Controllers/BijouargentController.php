<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BijouargentController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId=$user->id;
        $bijoux = Bijou::where('category','Argents')->get();
        return view('pages.bijoux-inox', compact('bijoux'))->with("userId",$userId);
    }
}
