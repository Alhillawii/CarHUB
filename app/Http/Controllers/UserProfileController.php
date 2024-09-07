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
        $User = Auth::User();
        return view('profile.edit', compact('User'));
    }

    public function update(Request $request)
    {
        $User = auth()->User(); // Assuming you're updating the authenticated user
    
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $User->id,
            'password' => 'nullable|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Update email
        $User->email = $request->input('email');
    
        // Update password only if provided
        if ($request->filled('password')) {
            $User->password = bcrypt($request->input('password'));
        }
    
        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($User->image) {
                Storage::delete('public/' . $User->image);
            }
    
            // Store the new image
            $path = $request->file('image')->store('profile_images', 'public');
            $User->image = $path;
        }
    
        // Save the user data
        $User->save();
    
        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
    }
