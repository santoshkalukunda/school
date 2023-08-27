<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::latest()->paginate(50);
        return view('partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Partner $partner = null)
    {
        if (!$partner) {
            $partner = new Partner();
        }
        return view('partners.create', compact('partner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartnerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartnerRequest $request)
    {
        $data = $request->validated();
        // return $data;
        if ($request->file('image')) {
            $data['image'] = Storage::putFile('partners', $request->file('image'));
        }
        Auth::user()
            ->partners()
            ->create($data);
        return redirect()
            ->route('partners.index')
            ->with('success', 'Partners Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return $this->create($partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartnerRequest  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        $data = $request->validated();
        // return $request;
        if ($request->file('image')) {
            if ($partner->image) {
                Storage::delete($partner->image);
            }
            $data['image'] = Storage::putFile('partners', $request->file('image'));
        }

        $partner->update($data);
        return redirect()
            ->route('partners.index')
            ->with('success', 'Partner Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        Storage::delete($partner->image);
        $partner->delete();
        return redirect()
            ->back()
            ->with('success', 'Partner Deleted');
    }
}
