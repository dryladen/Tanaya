<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function index()
    {
        $data = array(
            "title" => "Proyek",
            "clients" => Client::all(),
            "projects" => Project::all(),
        );
        return view('index', $data);
    }
    function login()
    {
        return view('admin.login');
    }
    function dashboard()
    {
        $data = array(
            "title" => "Dashboard",
            "clients" => Client::count(),
            "projects" => Project::count(),
            "users" => User::count(),
        );
        return view('/admin/dashboard',$data);
    }
    function loginPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'Masukan Username anda',
            'password.required' => 'Password wajib diisi',
        ]);
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect()->route('client')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Username atau password salah');
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
