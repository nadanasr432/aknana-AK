<?php

namespace App\Http\Controllers\Auth;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ClientLoginController extends Controller
{
    public function showLoginForm()
    {
        $header = Header::first();
        $temp_contactUs = Template::where('name->en', 'Contact Us')->get();
        $footer = Footer::first();
        return view('auth.clients.client-login',compact('header', 'temp_contactUs', 'footer'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('client')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended('/client/profile');
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('client')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/client/login');
    }
}
