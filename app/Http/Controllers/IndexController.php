<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index(Request $request)
    {
        $filter = $request->query('filter');
        if ($filter) {
            $data = array(
                "title" => "Proyek",
                "clients" => Client::all(),
                "projects" => Project::sortable()->where('task', 'like', '%' . $filter . '%')
                    ->orWhere('company', 'like', '%' . $filter . '%')
                    ->orWhere('location', 'like', '%' . $filter . '%')
                    ->orWhere('comodity', 'like', '%' . $filter . '%')
                    ->orWhere('month', 'like', '%' . $filter . '%')
                    ->orWhere('years', 'like', '%' . $filter . '%')
                    ->paginate(10)
            );
        } else {
            $data = array(
                "title" => "Proyek",
                "clients" => Client::all(),
                "projects" => Project::sortable()->paginate(10)
            );
        }
        return view('index', $data);
    }
}
