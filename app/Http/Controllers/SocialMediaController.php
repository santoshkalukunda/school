<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use App\Http\Requests\StoreSocialMediaRequest;
use App\Http\Requests\UpdateSocialMediaRequest;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SocialMedia $socialMedia = null)
    {
        if (!$socialMedia) {
            $socialMedia = new SocialMedia();
        }
        $socialMedias = SocialMedia::get();
        return view('social-media.index', compact(['socialMedia','socialMedias']));
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
     * @param  \App\Http\Requests\StoreSocialMediaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialMediaRequest $request)
    {
       SocialMedia::create($request->validated());
       return redirect()->back()->with('success'.'Social Media Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMedia $socialMedia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMedia $socialMedia)
    {
        return $this->index($socialMedia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialMediaRequest  $request
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialMediaRequest $request, SocialMedia $socialMedia)
    {
        $socialMedia->update($request->validated());
        return redirect()
        ->route('social-medias.index')
        ->with('success', 'Social Media Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMedia  $socialMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMedia $socialMedia)
    {
        $socialMedia->delete();
        return redirect()
            ->back()
            ->with('success', 'Social Media Deleted');
    }
}
