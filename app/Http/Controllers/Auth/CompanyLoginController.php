<?php

namespace App\Http\Controllers\Auth;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CompanyLoginController extends Controller
{
    public function showLoginForm()
    {
        $header = Header::first();
        $temp_contactUs = Template::where('name->en', 'Contact Us')->get();
        $footer = Footer::first();
        return view('auth.companies.company-login', compact('header', 'temp_contactUs', 'footer'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('company')->attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('company')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
