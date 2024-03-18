<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginController extends Controller
{
    public function plugins()
    {
        return view('backend.pages.plugins');
    }
}
