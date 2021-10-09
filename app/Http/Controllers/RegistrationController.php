<?php

namespace App\Http\Controllers;

use App\Models\User;
use Doctrine\Common\Cache\RedisCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function registrationCreate() {
      return view('registration.create');
    }

    public function registrationStore(Request $request) {
      $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|confirmed'
      ]);

      $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
      ]);

      session()->flash('success', 'User '.$request->name.' created succesfully!');
      Auth::login($user);
      
      return redirect()->to('/admin');
    }
}
