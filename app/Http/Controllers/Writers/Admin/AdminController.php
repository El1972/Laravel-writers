<?php

namespace App\Http\Controllers\Writers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.content');
    }
}
