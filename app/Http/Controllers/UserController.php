<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request)
    {
        $filter = $request->query('filter');
        if ($filter) {
            $data = array(
                "title" => "Users",
                "users" => User::sortable()->where('name', 'like', '%' . $filter . '%')->paginate(10)
            );
        } else {
            $data = array(
                "title" => "Users",
                "users" => User::sortable()->paginate(10)
            );
        }
        confirmDelete("Hapus User", "Apa anda yakin ingin menghapus user ini?");
        return view('admin.users', $data);
    }
    function store(Request $request)
    {   
        // validate request name,password with confirm password
        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
        ], [
            'name.required' => 'Nama wajib di isi',
            'password.required' => 'Password wajib di isi',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',
        ]);
        User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('users')->with('success', 'Data berhasil ditambahkan');
    }
    function edit(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'confirmed',
        ], [
            'name.required' => 'Nama wajib di isi',
            'password.confirmed' => 'Konfirmasi password tidak sesuai',
        ]);
        // jika hanya mengubah nama tidak usah update password
        if ($request->password) {
            User::where('id', $id)->update([
                'name' => $request->name,
                'password' => bcrypt($request->password),
            ]);
        } else {
            User::where('id', $id)->update([
                'name' => $request->name,
            ]);
        }
        return redirect()->route('users')->with('success', 'Data berhasil diubah');
    }
    function delete($id)
    {
        User::destroy($id);
        return redirect()->route('users')->with('success', 'Data berhasil dihapus');
    }
}
