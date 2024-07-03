<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:clients',
            'phone' => 'required',
            'password' => 'required',
            'degree' => 'required',
        ]);

        return Client::create($request->all());
    }

    public function show($id)
    {
        return Client::find($id);
    }

    public function update(Request $request, $id)
    {
        $client = Client::find($id);
        $client->update($request->all());

        return $client;
    }

    public function destroy($id)
    {
        return Client::destroy($id);
    }
}
