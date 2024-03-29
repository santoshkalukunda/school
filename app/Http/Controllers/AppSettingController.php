<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppSettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AppSettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
    }
    public function store(AppSettingRequest $request)
    {
        // return $request;
        $data = $request->validated();
        if ($request->file('logo')) {
            $data['logo'] = Storage::putFile('logo', $request->file('logo'));
        }
        if ($request->file('fevicon')) {
            $data['fevicon'] = Storage::putFile('fevicon', $request->file('fevicon'));
        }
        appSettings()->set($data);

        return redirect()->back()->with('success',"apps Setting saved");
    }
}
