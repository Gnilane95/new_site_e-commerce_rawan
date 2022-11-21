<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BijouxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bijoux = Bijou::orderBy('updated_at','desc')->paginate(10) ;
        return view('pages.bijoux', compact('bijoux'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bijoux = Bijou::all();
        return view('pages.create-bijoux', compact('bijoux'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->name);
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);
        $validateImg = $request->file('url_img')->store('images');
        Bijou::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'category'=>$request->category,
            'url_img'=>$validateImg,
            'created_at'=>now()
        ]);
        return redirect()->route('bijoux.all')->with('status', 'Bijou ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bijou $bijou)
    {
        return view('pages.bijoux', compact('bijou'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bijou $bijou)
    {
        return view('pages.edit-bijou', compact('bijou'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bijou $bijou)
    {
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($bijou->url_img);
            //Store the new img
            $bijou->url_img = $request->file('url_img')->store('images');
        }
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|sometimes|mimes:png,jpg,jpeg|max:5000',
        ]);

        $bijou->update ([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'category'=>$request->category,
            'url_img'=>$bijou->url_img,
            'updated_at'=>now()
        ]);
        return redirect()->route('bijoux.all', $bijou->id)->with('status', 'Bijou modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bijou $bijou)
    {
        $bijou->delete();
        return redirect()->route('bijoux.all')->with('status', 'Bijou supprimé');
    }

    /**
     * Return all bijoux view
     * 
     * @return void
     */
    public function allBijoux()
    {
        $bijoux = Bijou::orderBy('updated_at', 'DESC')->paginate(10) ;
        return view('pages.all-bijoux', compact('bijoux'));
    }
}
