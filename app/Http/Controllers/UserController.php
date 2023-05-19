<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
      $incomingFields = $request->validate([
        'name'=>['required', 'min:3', 'max:10'],
        'email'=>['required', 'email'],
        'password'=>['required', 'min:5', 'max:40']
      ]);
      return 'thank you for your message';
    }
}
