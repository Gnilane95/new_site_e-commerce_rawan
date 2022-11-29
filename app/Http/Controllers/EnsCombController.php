<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsCombController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Ensembles/Combinaisons')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.ens-comb',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.ens-comb', compact('femmes'));
    }
}
