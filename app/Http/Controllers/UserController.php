<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::latest()->get();
        return view('users.index', compact('users'));
    }

    public function register(User $user = null)
    {
        if (!$user) {
            $user = new User();
        }
        return view('users.register', compact('user'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile' => ['nullable'],
            'status' => ['nullable'],
        ]);
        if ($request->file('profile')) {
            $data['profile'] = Storage::putFile('user-profile', $request->file('profile'));
        }
        $data['password'] = Hash::make($data['password']);
        // return $data;
        $user = User::create($data);
        $user->assignRole($data['role']);
        return redirect()
            ->route('users.index')
            ->with('success', 'User created');
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'role' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile' => ['nullable'],
            'status' => ['nullable'],
        ]);
        if ($request->file('profile')) {
            if ($user->profile) {
                Storage::delete($user->profile);
            }
            $data['profile'] = Storage::putFile('user-profile', $request->file('profile'));
        }

        $user->update($data);
        $user->assignRole($data['role']);
        return redirect()
            ->route('users.index')
            ->with('success', 'User Updated');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        Storage::delete($user->profile);
        $user->delete();
        return redirect()
            ->back()
            ->with('success', 'User Deleted');
    }

    public function changePassword(User $user)
    {
        return view('users.change-password', compact('user'));
    }
    public function changePasswordUpdate(Request $request, User $user)
    {
        $data = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $data['password'] = Hash::make($data['password']);
        $user->update($data);
        return redirect()
            ->route('users.index')
            ->with('success', 'User Password Changed');
    }
}
