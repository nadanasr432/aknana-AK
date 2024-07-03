<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        return Company::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:companies',
            'address' => 'required',
            'type_of_company' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        return Company::create($request->all());
    }

    public function show($id)
    {
        return Company::find($id);
    }

    public function update(Request $request, $id)
    {
        $company = Company::find($id);
        $company->update($request->all());

        return $company;
    }

    public function destroy($id)
    {
        return Company::destroy($id);
    }
}
