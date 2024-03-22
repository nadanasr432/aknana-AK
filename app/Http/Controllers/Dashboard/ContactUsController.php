<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
     public function index(){
        $contacts=ContactUs::all();
        return view('dashboards.contactUs.show',compact( 'contacts'));
   }

   public function destroy($id)
{
    $contact = ContactUs::findOrFail($id);
    $contact->delete();
    return back()->with('success', 'Service deleted successfully');
}


}
