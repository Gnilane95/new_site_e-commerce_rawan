<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RobeJupeController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Robes/Jupes')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.robes-jupes',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.robes-jupes', compact('femmes'));
    }

    public function allRobesJupes()
    {
        $femmes = Femme::where('category', 'Robes/Jupes')->get();
        return view('pages.all-robesJupes', compact('femmes'));
    }
}
