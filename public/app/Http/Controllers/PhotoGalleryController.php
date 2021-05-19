<?php

namespace App\Http\Controllers;

use App\Models\PhotoGallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'update', 'delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $photoGalleries = PhotoGallery::query()->orderByDesc('updated_at');

        return view('photo_gallery.photo_gallery')->with('photoGalleries', $photoGalleries->paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'label' => 'required',
            "description" => 'required',
        ]);


        if ($request->hasFile('photo')) {
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //File extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/photos/', $fileNameToStore);
        } else {
            $fileNameToStore = 'placeholder.png';
        }

        $request->request->add(['image' => $fileNameToStore]);

        PhotoGallery::create($request->all());

        return redirect()->back()->with('success', 'Successfully registered');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PhotoGallery $photoGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PhotoGallery $photoGallery)
    {
        //

        $photoGalleries = PhotoGallery::query();

        return view('photo_gallery.photo_gallery')->with(['photoGallery' => $photoGallery, 'photoGalleries' => $photoGalleries->paginate(15)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhotoGallery $photoGallery)
    {
        //
        $this->validate($request, [
            'label' => 'required',
            "description" => 'required',
        ]);


        if ($request->hasFile('photo')) {
            //get file name with extension
            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            //Get only file name
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            //File extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //File name to store
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/photos/', $fileNameToStore);
        } else {
            $fileNameToStore = $photoGallery->image;
        }

        $request->request->add(['image' => $fileNameToStore]);

        $photoGallery->update($request->all());

        return redirect()->back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PhotoGallery  $photoGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhotoGallery $photoGallery)
    {
        //
        $photoGallery->delete();

        return redirect('photo-gallery')->with('success', 'Successfully deleted');
    }
}
