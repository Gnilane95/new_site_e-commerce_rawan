<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PantalonJeanController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Pantalons/Jeans')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.pant-jeans',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.pant-jeans', compact('femmes'));
    }
}
