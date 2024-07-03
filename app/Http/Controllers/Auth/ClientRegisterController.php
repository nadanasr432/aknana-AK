<?php

namespace App\Http\Controllers\Auth;

use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $header = Header::first();
        $temp_contactUs = Template::where('name->en', 'Contact Us')->get();
        $footer = Footer::first();
        return view('auth.clients.client-register', compact('header', 'temp_contactUs', 'footer'));
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $client = $this->create($request->all());

        Auth::guard('client')->login($client);

        return redirect()->intended('/client/dashboard');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'degree' => ['required', 'string', 'max:255'],
        ]);
    }

    protected function create(array $data)
    {
        return Client::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'degree' => $data['degree'],
        ]);
    }
}
