<?php

namespace App\Http\Controllers;

use App\Models\Homme;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HommeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hommes = Homme::orderBy('updated_at','DESC')->paginate(8);
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.abayasHomme', compact('hommes'))->with("userId",$userId);
        }
        return view('pages.abayasHomme', compact('hommes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hommes = Homme::all();
        return view('pages.create-abayasHomme', compact('hommes'));
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
        $new_abayaHomme = Homme::create([
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
                    "homme_id"=> $new_abayaHomme->id,
                ]);
            }
        }

        return redirect()->route('abayasHomme.all')->with('status', 'Abaya ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homme $homme)
    {
        $allAbayasHommes = Homme::orderBy('created_at','desc')->paginate(4) ;
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.show-abayasHomme',compact('homme','allAbayasHommes'))->with("userId",$userId);
        }
        return view('pages.show-abayasHomme', compact('homme', 'allAbayasHommes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Homme $homme)
    {
        return view('pages.edit-abayaHomme', compact('homme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homme $homme)
    {
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($homme->url_img);
            //Store the new img
            $homme->url_img = $request->file('url_img')->store('images');
        }
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'url_img'=>'required|image|sometimes|mimes:png,jpg,jpeg|max:5000',
        ]);

        $homme->update ([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'url_img'=>$homme->url_img,
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
                    "homme_id"=> $homme->id,
                ]);
            }
        }

        return redirect()->route('abayasHomme.all', $homme->id)->with('status', 'Abaya modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homme $homme)
    {
        $homme->delete();
        return back()->with('status', 'Abaya supprimé');
    }

    public function allAbayasHomme()
    {
        $hommes = Homme::all();
        return view('pages.all-abayasHomme', compact('hommes'));
    }
}
