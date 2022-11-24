<?php

namespace App\Http\Controllers;

use App\Models\Avi;
use Illuminate\Http\Request;

class AviController extends Controller
{
    public function store(Request $request, $id)
    {
        
        $request->validate([
            'avis'=>'required|max:300|string',
            'name'=>'required|string|max:90',
            'email'=>'required|string',
        ]);
        //get data of form
        $data = [
            'avis' => $request->avis,
            'name' => $request->name,
            'email' => $request->email,
            'bijou_id' => $id,
            'created_at' => now(),
        ];
        //insert in table Comment
        Avi::create($data);
        // dd($data);

        return back();
    }
}
