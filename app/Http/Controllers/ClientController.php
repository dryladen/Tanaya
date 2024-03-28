<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index()
    {
        $data = array(
            "clients" => Client::all()
        );
        return view('admin.dashboard', $data);
    }
}
