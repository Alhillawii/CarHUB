<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $UsersFromDB = User::all();
        return view("dashboard.user.index", ["users" => $UsersFromDB]);
    }

    public function create()
    {
        return view('dashboard.user.create');
    }

    public function store(Request $request)
    {
        request()->validate(
            [
                'name'=>['required','min:3'],
                'email'=>['required','email'],
                'mobile'=>['required','min:9','numeric'],
                'password'=>['required','min:5'],
                'image'=>['nullable','image','mimes:jpeg,png,jpg'],
            ]
        );
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileName=time().'.'.$extension;
            $path='uploads/user/';
            $file->move($path, $fileName);
        }

        $name = request()->name;
        $email = request()->email;
        $mobile = request()->mobile;
        $role = request()->role;
        $password = request()->password;



        User::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'mobile'=>$mobile,
            'role'=>$role,
            'image'=>'uploads/user/'.$fileName
        ]);


        return to_route('user.index');
    }

    public function show(User $user)
    {
        return view("dashboard.user.show", ["user" => $user]);
    }

    public function edit(User $user)
    {
        return view('dashboard.user.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        request()->validate(
            [
                'name'=>['required','min:3'],
                'email'=>['required','email'],
                'mobile'=>['required','min:9','numeric'],
                'image'=>['nullable','image','mimes:jpeg,png,jpg'],
            ]
        );
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileName=time().'.'.$extension;
            $path='uploads/user/';
            $file->move($path, $fileName);
        }

        $name = request()->name;
        $email = request()->email;
        $name = request()->name;
        $email = request()->email;
        $mobile = request()->mobile;
        $role = request()->role;


        $user->update(
            [
                'name'=>$name,
                'email'=>$email,
                'mobile'=>$mobile,
                'role'=>$role,
                'image'=>'uploads/user/'.$fileName
            ]
        );


        //3- redirection to posts.show
        return to_route('user.show', $user->id);
    }


    public function destroy(User $user)
    {
        $user->delete();
        return to_route('user.index');
    }
}
