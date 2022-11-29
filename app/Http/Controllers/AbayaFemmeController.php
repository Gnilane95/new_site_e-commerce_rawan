<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbayaFemmeController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Abayas')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.abayas-femme',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.abayas-femme', compact('femmes'));
    }

    public function allAbayasfemme()
    {
        $femmes = Femme::where('category', 'Abayas')->get();
        return view('pages.all-abayasFemme', compact('femmes'));
    }
}
