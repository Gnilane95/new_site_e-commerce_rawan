<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BijouinoxController extends Controller
{
    public function index()
    {
        $bijoux = Bijou::where('category','Aciers Inoxydables')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.bijoux-inox',compact('bijoux'))->with("userId",$userId);
        }
        
        return view('pages.bijoux-inox', compact('bijoux'));
    }
}
