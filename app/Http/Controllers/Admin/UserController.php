<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'min:6',
        ]);

        $user = User::create($request->all());

        return back()->with('message', 'کاربر اضافه شد.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $user = User::where('email', $request->email);
        if(Auth::attempt($credentials)) {
            return redirect('admin/panel');
        } else {
            return back()->with('message', 'ایمیل یا رمز اشتباه است.');
        }
    }


}
