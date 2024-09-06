<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', compact('user'));
    }

  
    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|confirmed|min:8',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048' ,
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete('public/images/' . $user->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/pimages', $imageName);

            
            $user-> image = $imageName;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully.');
    }
}
