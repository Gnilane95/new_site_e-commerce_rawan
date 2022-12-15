<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Enfant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfants = Enfant::orderBy('updated_at','desc')->paginate(8) ;
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.enfants', compact('enfants'))->with("userId",$userId);
        }
        return view('pages.enfants', compact('enfants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfants = Enfant::all();
        return view('pages.create-vetEnfant', compact('enfants'));
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
            'url_img'=>'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);

        $validateImg = $request->file('url_img')->store('images');
        $new_vetEnfant = Enfant::create([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
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
                    "enfant_id"=> $new_vetEnfant->id,
                ]);
            }
        }

        return redirect()->route('vetEnfant.all')->with('status', 'Vêtement ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enfant $enfant)
    {
        $allVetEnfants = Enfant::orderBy('created_at','desc')->paginate(4) ;
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.show-vetEnfant',compact('enfant','allVetEnfants'))
                ->with("userId",$userId);
        }
        return view('pages.show-vetEnfant', compact('enfant', 'allVetEnfants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Enfant $enfant)
    {
        return view('pages.edit-vetEnfant', compact('enfant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enfant $enfant)
    {
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($enfant->url_img);
            //Store the new img
            $enfant->url_img = $request->file('url_img')->store('images');
        }
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'url_img'=>'required|image|sometimes|mimes:png,jpg,jpeg|max:5000',
        ]);

        $enfant->update ([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'url_img'=>$enfant->url_img,
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
                    "enfant_id"=> $enfant->id,
                ]);
            }
        }

        return redirect()->route('vetEnfant.all')->with('status', 'Vêtement modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enfant $enfant)
    {
        $enfant->delete();
        return back()->with('status','Vêtement supprimé');
    }

    public function allVetEnfant()
    {
        $enfants = Enfant::all();
        return view('pages.all-vetEnfant', compact('enfants'));
    }
}
