<?php

namespace App\Http\Controllers;

use App\Models\Telephone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
          return redirect()->route('admin.login');
        }
        $data = Telephone::select('telnumber', 'created_at')->get();
        return view('admin.panel', ['phones' => $data]);
    }
    
    public function login()
    {
      return view('admin.login');
    }

    public function authenticate(Request $request)
    {
      $credentials = $request->validate([
        'name' => ['required'],
        'password' => ['required'],
      ]);

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('admin');
      }

      return back()->withErrors([
        'email' => 'The provided credentials do not match our records.', 
      ]);
    }
}
