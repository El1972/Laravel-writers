<?php

namespace App\Http\Controllers\Writers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('frontend.about');
    }
}
