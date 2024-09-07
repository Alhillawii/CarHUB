<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UserProfileController extends Controller
{
    
    public function edit()
    {
        $User = Auth::user();
        return view('profile.edit', compact('User'));
    }

    public function update(Request $request)
    {
        $User = Auth::user();
    
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $User->id,
            'password' => 'nullable|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Update email
        $User->email = $request->input('email');

        // Update password only if provided
        if ($request->filled('password')) {
            $User->password = Hash::make($request->input('password'));
        }

        // Handle image upload
        $fileName = $User->image; // Keep the old image if no new one is uploaded

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $path = 'uploads/users/';
            $file->move(public_path($path), $fileName);

            // Update the image path if a new image was uploaded
            $fileName = $path . $fileName;
        }

        // Update the user data
        $User->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $User->password,
            'image' => $fileName,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }

    }
