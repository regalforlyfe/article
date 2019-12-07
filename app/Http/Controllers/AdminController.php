<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function welcomefungsi(){
        return view('welcome');
      }
    
    public function basefungsi(){
        return view('base');
      }
}
