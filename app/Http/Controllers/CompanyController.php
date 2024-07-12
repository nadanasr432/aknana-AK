<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Header;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
    public function showProfile()
    {
        $company = Company::with('certificate')->find(auth()->user()->id);
        $header = Header::first();
        $footer = Footer::first();
        return view('companies.profile', compact('company', 'header', 'footer'));
    }

    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:companies,email,' . $company->id,
            'address' => 'required|string|max:255',
            'type_of_company' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->route('company.profile')
            ->withErrors($validator)
                ->withInput();
        }

        // Update company details
        $company->update($request->only('name', 'email', 'phone', 'address', 'type_of_company'));

        if ($request->hasFile('logo')) {
            $existingLogo = $company->media()->where('type', 'logo')->first();
            if ($existingLogo) {
                $company->media()->delete();
            }
            $logoPath = $request->file('logo')->store('logos', 'public');
            $company->media()->create(['file_path' => $logoPath, 'type' => 'logo']);
        }    

        return redirect()->route('company.profile')->with('success', __('file.Profile updated successfully.'));
    }

    public function changePassword(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('company.profile')
            ->withErrors($validator)
                ->withInput();
        }

        $company = Company::findOrFail($id);
        $company->password = Hash::make($request->password);
        $company->save();

        return redirect()->route('company.profile')->with('success', __('file.Password changed successfully.'));
    }
}