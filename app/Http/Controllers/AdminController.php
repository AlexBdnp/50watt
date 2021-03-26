<?php

namespace App\Http\Controllers;

use App\Models\Telephone;

class AdminController extends Controller
{
    public function index()
    {
        $data = Telephone::select('telnumber', 'created_at')->get();
        return view('admin.panel', ['phones' => $data]);
    }
}
