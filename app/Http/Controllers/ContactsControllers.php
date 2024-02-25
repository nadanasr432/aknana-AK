<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsControllers extends Controller
{
   public function index(){
        return view('contactUs.create');
   }
}
