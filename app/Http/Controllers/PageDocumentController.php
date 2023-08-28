<?php

namespace App\Http\Controllers;

use App\Models\PageDocument;
use App\Http\Requests\StorePageDocumentRequest;
use App\Http\Requests\UpdatePageDocumentRequest;
use Illuminate\Support\Facades\Storage;

class PageDocumentController extends Controller
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
     * @param  \App\Http\Requests\StorePageDocumentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageDocumentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageDocument  $pageDocument
     * @return \Illuminate\Http\Response
     */
    public function show(PageDocument $pageDocument)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageDocument  $pageDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(PageDocument $pageDocument)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePageDocumentRequest  $request
     * @param  \App\Models\PageDocument  $pageDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePageDocumentRequest $request, PageDocument $pageDocument)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageDocument  $pageDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageDocument $pageDocument)
    {
        Storage::delete($pageDocument->file);
        $pageDocument->delete();
       return redirect()->back()->with('success',"Page document deleted");
    }
}
