<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function index()
    {
        return view('/admin/dashboard');
    }
}
