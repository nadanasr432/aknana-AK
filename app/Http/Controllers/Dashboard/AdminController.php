<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{


public function showLoginForm()
{
    return view('dashboards.Auth.login');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        // Authentication passed...
        return redirect()->route('dashboard');
    }

    // Authentication failed...
    return back()->withErrors(['email' => 'Invalid login credentials']);
}

public function logout()
{
    Auth::logout();

    return redirect('login');
}

}
