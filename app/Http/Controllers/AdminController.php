<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function makelogin(Request $request)
    {
        $input = $request->only(['username', 'password']);
        if (Auth::guard('admin')->attempt($input)) {
            return redirect('/admin/dashboard');
        } else {
            return "login failed";
        }
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
