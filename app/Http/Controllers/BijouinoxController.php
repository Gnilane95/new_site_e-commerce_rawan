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
        $user = Auth::user();
        $userId=$user->id;
        $bijoux = Bijou::where('category','Aciers Inoxydables')->get();
        return view('pages.bijoux-inox', compact('bijoux'))->with("userId",$userId);
    }
}
