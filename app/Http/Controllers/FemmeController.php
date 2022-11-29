<?php

namespace App\Http\Controllers;

use App\Models\Femme;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FemmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $femmes = Femme::orderBy('updated_at', 'DESC')->paginate(8);
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.collectionsFemme',compact('femmes'))->with("userId",$userId);
        }
        return view('pages.collectionsFemme', compact('femmes'));
    }

    /**
     * Return all vetements femme view
     * 
     * @return void
     */
    public function allVetFemmes()
    {
        $femmes = Femme::all();
        return view('pages.all-vetfemmes', compact('femmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $femmes = Femme::all();
        return view('pages.create-vetfemme', compact('femmes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);

        $validateImg = $request->file('url_img')->store('images');
        $new_vetfemme = Femme::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'category'=>$request->category,
            'url_img'=>$validateImg,
            'created_at'=>now()
        ]);

         // 1-Verify if user select image or not
         if($request->has('images')){
            // 2-Stock all images selected in array
            $imagesSelected = $request->file('images');
            // 3- Loop storage each image
            foreach ($imagesSelected as $images) {
                // 4-Give a new name for each image
                $image_name = md5(rand(1000, 10000)). '.' . strtolower($images->extension());
                // 5-Set a passname
                $path_upload = 'img/images';
                $images->move(public_path($path_upload), $image_name);

                Image::create([
                    "slug"=>$path_upload .'/'.$image_name,
                    "created_at"=>now(),
                    "femme_id"=> $new_vetfemme->id,
                ]);
            }
        }

        return redirect()->route('vetfemmes.all')->with('status', 'Vêtement ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Femme $femme)
    {
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.show-vetfemme',compact('femme'))->with("userId",$userId);
        }
        return view('pages.show-vetfemme', compact('femme'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Femme $femme)
    {
        return view('pages.edit-vetfemme', compact('femme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Femme $femme)
    {
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($femme->url_img);
            //Store the new img
            $femme->url_img = $request->file('url_img')->store('images');
        }
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|sometimes|mimes:png,jpg,jpeg|max:5000',
        ]);

        $femme->update ([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'category'=>$request->category,
            'url_img'=>$femme->url_img,
            'updated_at'=>now()
        ]);

        if($request->has('images')){
            // 2-Stock all images selected in array
            $imagesSelected = $request->file('images');
            // 3- Loop storage each image
            foreach ($imagesSelected as $image) {
                // 4-Give a new name for each image
                $image_name = md5(rand(1000, 10000)). '.' . strtolower($image->extension());
                // 5-Set a passname
                $path_upload = 'img/images';
                $image->move(public_path($path_upload), $image_name);

                Image::create([
                    "slug"=>$path_upload .'/'.$image_name,
                    "created_at"=>now(),
                    "femme_id"=> $femme->id,
                ]);
            }
        }

        return redirect()
        ->route('vetfemmes.all',$femme->id)
        ->with('status', 'Vêtement modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Femme $femme)
    {
        $femme->delete();
        return back()->with('status', 'Vêtement supprimé');
    }
}
