<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::latest()->paginate(50);
        return view('gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Gallery $gallery = null)
    {
        if (!$gallery) {
            $gallery = new Gallery();
        }
        return view('gallery.create', compact('gallery'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGalleryRequest $request)
    {
        $data = $request->validated();

        if ($request->file('photo')) {
            $data['photo'] = Storage::putFile('gallery', $request->file('photo'));
        }
        Gallery::create($data);
        return redirect()
            ->route('galleries.index')
            ->with('success', 'Gallery Creaeted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return $this->create($gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGalleryRequest  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGalleryRequest $request, Gallery $gallery)
    {
        $data = $request->validated();

        if ($request->file('photo')) {
            if ($gallery->photo) {
                # code...
                Storage::delete($gallery->photo);
            }
            $data['photo'] = Storage::putFile('gallery', $request->file('photo'));
        }

        $gallery->update($data);
        return redirect()
            ->route('galleries.index')
            ->with('success', 'Gallery Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->photo) {
            # code...
            Storage::delete($gallery->photo);
        }
        $gallery->delete();
        return redirect()
            ->back()
            ->with('success', 'Gallary Deleted');
    }

    public function photo(){
        return view('frontend.gallery.photo');
    }
    public function video(){
        return view('frontend.gallery.video');
    }
}
