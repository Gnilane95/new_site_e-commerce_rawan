<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PullHautController extends Controller
{
    public function index()
    {
        $femmes = Femme::where('category', 'Pulls/hauts')->get();
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.pulls-hauts',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.pulls-hauts', compact('femmes'));
    }
}
