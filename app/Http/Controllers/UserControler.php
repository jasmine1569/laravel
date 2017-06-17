<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
   
   public function showHome () {
       return view('pages.home');
   }
}
