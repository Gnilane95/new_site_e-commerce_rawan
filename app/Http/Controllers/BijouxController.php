<?php

namespace App\Http\Controllers;

use App\Models\Bijou;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $bijoux = Bijou::orderBy('updated_at','desc')->paginate(12) ;
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.home')->with("userId",$userId);
        } else {
            return view('pages.bijoux', compact('bijoux'));
        }
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
            'price'=>'required',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|mimes:png,jpg,jpeg|max:5000',
        ]);

        $validateImg = $request->file('url_img')->store('images');
        $new_bijou = Bijou::create([
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
                    "bijou_id"=> $new_bijou->id,
                ]);
            }
        }

        return redirect()->route('bijoux.all')->with('status', 'Bijou ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Bijou $bijoux)
    {
        // $bijoux = Bijou::orderBy('created_at','desc')->paginate(4) ;
        // dd($bijoux);
        if (Auth::check()) {
            $user = Auth::user();
            $userId=$user->id;
            return view('pages.home')->with("userId",$userId);
        } else {
            return view('pages.show-bijoux', compact('bijoux'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Bijou $bijoux)
    {
        // dd($bijoux->all());
        return view('pages.edit-bijou', compact('bijoux'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Bijou $bijoux)
    {
        if ($request->hasFile('url_img')) {
            //Delete previous img
            Storage::delete($bijoux->url_img);
            //Store the new img
            $bijoux->url_img = $request->file('url_img')->store('images');
        }
        $request->validate([
            'name'=>'required|string|max:200',
            'price'=>'required|numeric|',
            'desc'=>'required|max:1000|string',
            'stock'=>'required|integer',
            'category'=>'required',
            'url_img'=>'required|image|sometimes|mimes:png,jpg,jpeg|max:5000',
        ]);

        $bijoux->update ([
            'name'=>$request->name,
            'price'=>$request->price,
            'desc'=>$request->desc,
            'stock'=>$request->stock,
            'category'=>$request->category,
            'url_img'=>$bijoux->url_img,
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
                    "bijou_id"=> $bijoux->id,
                ]);
            }
        }

        return redirect()->route('bijoux.all', $bijoux->id)->with('status', 'Bijou modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bijou $bijoux)
    {
        // dd($bijoux);
        $bijoux->delete();
        return back()->with('status', 'Bijou supprimé');
    }

    /**
     * Return all bijoux view
     * 
     * @return void
     */
    public function allBijoux()
    {
        $bijoux = Bijou::all();
        return view('pages.all-bijoux', compact('bijoux'));
    }
}
