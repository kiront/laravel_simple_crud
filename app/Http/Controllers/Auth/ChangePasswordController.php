<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangePasswordController extends Controller
{
    public function index(){
        return view('auth.passwords.change');
    }

   public function changepassword(){

   }
}

