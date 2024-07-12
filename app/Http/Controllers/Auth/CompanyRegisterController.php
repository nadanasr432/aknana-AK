<?php
// app/Http/Controllers/Auth/CompanyRegisterController.php
namespace App\Http\Controllers\Auth;

use App\Models\Media;
use App\Models\Footer;
use App\Models\Header;
use App\Models\Company;
use App\Models\Template;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CompanyRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $header = Header::first();
        $temp_contactUs = Template::where('name->en', 'Contact Us')->get();
        $footer = Footer::first();
        return view('auth.companies.company-register', compact('header', 'temp_contactUs', 'footer'));
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $company = $this->create($request->all());

        Auth::guard('company')->login($company);

        return redirect()->route('company.profile');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'address' => ['required', 'string', 'max:255'],
            'type_of_company' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'logo' => ['nullable', 'image', 'mimes:jpeg,png,gif', 'max:2048'],  
        ]);
    }


    protected function create(array $data)
    {
        $company = Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'address' => $data['address'],
            'type_of_company' => $data['type_of_company'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'serial_id' => $data['serial_id'],
        ]);

        if (request()->hasFile('logo')) {
            $logoPath = request()->file('logo')->store('logos', 'public');
            $company->media()->create(['file_path' => $logoPath, 'type' => 'logo']);
        }

        return $company;
    }

}
