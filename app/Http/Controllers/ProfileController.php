<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileRequest $request)
    {
        $data = $request->validated();
        if ($request->file('profile')) {
            if (auth()->user()->profile) {
                Storage::delete(auth()->user()->profile);
            }
            $data['profile'] = Storage::putFile('user-profile', $request->file('profile'));
        }
        auth()
            ->user()
            ->update($data);
        return redirect()
            ->back()
            ->with('success', 'Profile Updated');
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()
            ->user()
            ->update(['password' => Hash::make($request->get('password'))]);

        return redirect()
            ->back()
            ->with('success', 'Password Changed');
    }
}
