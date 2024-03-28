<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $data = array(
            'clients' => Client::all(),
            'projects' => Project::all()
        );
        return view('index', $data);
    }
}
