<?php

namespace App\Http\Controllers;

use App\Models\PostDocument;
use App\Http\Requests\StorePostDocumentRequest;
use App\Http\Requests\UpdatePostDocumentRequest;
use Illuminate\Support\Facades\Storage;

class PostDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePostDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostDocument  $postDocument
     * @return \Illuminate\Http\Response
     */
    public function show(PostDocument $postDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostDocument  $postDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(PostDocument $postDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostDocumentRequest  $request
     * @param  \App\Models\PostDocument  $postDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostDocumentRequest $request, PostDocument $postDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostDocument  $postDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostDocument $postDocument)
    {
        Storage::delete($postDocument->file);
        $postDocument->delete();
       return redirect()->back()->with('success',"Post document deleted");
    }
}
