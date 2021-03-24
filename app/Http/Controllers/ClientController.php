<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function someAction(Request $request)
    {
        return "$request->tel<br><a href='/'>На главную</a>";
    }
}
