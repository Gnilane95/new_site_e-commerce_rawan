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
        ]);
        //get data of form
        $data = [
            'avis' => $request->avis,
            'created_at' => now(),
            'bijou_id' => $id
        ];
        //insert in table Comment
        Avi::create($data);
        // dd($data);

        return back();
    }
}
