<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index()
    {
        $data = array(
            "clients" => Client::paginate(5)
        );
        return view('admin.dashboard', $data);
    }
    function store(Request $request)
    {   
        // validate request name and image
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // get image file 
        $image = $request->file('image');
        $image_name = time() . '.' . $image->extension();
        $image->move(public_path('img-client'), $image_name);

        // create new client
        $client = new Client();
        $client->name = $request->name;
        $client->image = $image_name;
        $client->save();
        return redirect()->back()->with('success', 'Client added successfully');
    }
}
