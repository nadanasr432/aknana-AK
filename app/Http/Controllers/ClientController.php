<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Footer;
use App\Models\Header;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
{
    public function showProfile()
    {
        $client = Client::with('certificate')->find(auth()->user()->id);
        $header = Header::first();
        $footer = Footer::first();
        return view('clients.profile', compact('client', 'header', 'footer'));
    }


    public function update(Request $request, $id)
    {
        $client = Client::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:clients,email,' . $client->id,
            'phone' => 'required|string|max:20',
            'country' => 'required|string|max:255',
            'degree' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->route('client.profile')
            ->withErrors($validator)
                ->withInput();
        }

        $client->update($request->only('name', 'email', 'phone', 'country', 'degree'));

        return redirect()->route('client.profile')->with('success', __('file.Profile updated successfully.'));
    }

    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('client.profile')
            ->withErrors($validator)
                ->withInput();
        }

        $client = Client::findOrFail($id);
        $client->password = Hash::make($request->password);
        $client->save();

        return redirect()->route('clients.profile')->with('success', __('file.Password changed successfully.'));
    }
}
