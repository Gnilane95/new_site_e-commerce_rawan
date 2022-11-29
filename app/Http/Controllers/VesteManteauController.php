<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VesteManteauController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Vestes/Manteaux')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.vestes-manteaux',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.vestes-manteaux', compact('femmes'));
    }

    public function allVestesManteaux()
    {
        $femmes = Femme::where('category', 'Vestes/Manteaux')->get();
        return view('pages.all-vestesManteaux', compact('femmes'));
    }
}
