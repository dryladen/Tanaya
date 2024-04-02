<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    function index(Request $request)
    {
        $filter = $request->query('filter');
        if ($filter) {
            $data = array(
                "title" => "Klien",
                "clients" => Client::sortable()->where('name', 'like', '%' . $filter . '%')->paginate(5)
            );
        } else {
            $data = array(
                "title" => "Klien",
                "clients" => Client::sortable()->paginate(5)
            );
        }
        confirmDelete("Hapus Klien", "Apa anda yakin ingin menghapus klien ini?");
        return view('admin.client', $data);
    }
    
    function store(Request $request)
    {
        // validate request name and image
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:200'
        ], [
            'name.required' => 'Nama wajib di isi',
            'image.image' => 'File harus sebuah gambar',
            'image.mimes' => 'Hanya menerima file jpeg, png, jpg',
            'image.max' => 'File maksimal 200kb'
        ]);
        // jika ada image file 
        if ($request->hasFile('image')) {
            // get image file
            $image = $request->file('image');
            // set image file name
            $image_name = time() . '.' . $image->extension();
            // move image file to public/client-img
            $image->move(public_path('client-img'), $image_name);
        } else {
            // set default image file name
            $image_name = 'default.jpg';
        }
        // create new client
        Client::create([
            'name' => $request->name,
            'image' => $image_name
        ]);
        return redirect()->route('client')->with('success', 'Data berhasil ditambahkan');
    }
    function edit(Request $request, $id)
    {
        // validate request name and image
        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:200'
        ], [
            'name.required' => 'Nama wajib di isi',
            'image.image' => 'File harus sebuah gambar',
            'image.mimes' => 'Hanya menerima file jpeg, png, jpg',
            'image.max' => 'File maksimal 200kb'
        ]);
        // get client by id
        $client = Client::find($id);
        // jika ada image file 
        if ($request->hasFile('image')) {
            // get image file
            $image = $request->file('image');
            // set image file name
            $image_name = time() . '.' . $image->extension();
            // move image file to public/client-img
            $image->move(public_path('client-img'), $image_name);
            // delete old image file
            unlink(public_path('client-img/' . $client->image));
        } else {
            // set default image file name
            $image_name = $client->image;
        }
        // update client
        $client->update([
            'name' => $request->name,
            'image' => $image_name
        ]);
        return redirect()->route('client')->with('success', 'Data berhasil diubah');
    }
    function delete($id)
    {
        // get client by id
        $client = Client::find($id);
        // delete client
        $client->delete();
        // delete image file if not default.jpg
        if ($client->image != 'default.jpg') {
            unlink(public_path('client-img/' . $client->image));
        }
        return redirect()->route('client')->with('success', 'Data berhasil dihapus');
    }
}
