<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
  function index(Request $request)
  {
    $filter = $request->query('filter');
    if ($filter) {
      $data = array(
        "title" => "Proyek",
        "projects" => Project::where('name', 'like', '%' . $filter . '%')->paginate(5)
      );
    } else {
      $data = array(
        "title" => "Proyek",
        "projects" => Project::paginate(5)
      );
    }
    confirmDelete("Hapus Proyek", "Apa anda yakin ingin menghapus proyek ini?");
    return view('admin.project', $data);
  }
  function search(Request $request)
  {
    $data = array(
      "projects" => Project::where('name', 'like', '%' . $request->search . '%')->paginate(5)
    );
    confirmDelete("Hapus Proyek", "Apa anda yakin ingin menghapus proyek ini?");
    return view('admin.project', $data);
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
      // move image file to public/project-img
      $image->move(public_path('project-img'), $image_name);
    } else {
      // set default image file name
      $image_name = 'default.jpg';
    }
    // create new project
    Project::create([
      'name' => $request->name,
      'image' => $image_name
    ]);
    return redirect()->route('project');
  }
  function edit(Request $request, $id)
  {
    // validate request name
    $request->validate([
      'name' => 'required'
    ], [
      'name.required' => 'Nama wajib di isi'
    ]);
    // get project by id
    $project = Project::find($id);
    // jika ada image file
    if ($request->hasFile('image')) {
      // get image file
      $image = $request->file('image');
      // set image file name
      $image_name = time() . '.' . $image->extension();
      // move image file to public/project-img
      $image->move(public_path('project-img'), $image_name);
      // delete old image file
      // File::delete(public_path('project-img/' . $project->image));
    } else {
      // set image file name
      $image_name = $project->image;
    }
    // update project
    Project::where('id', $id)->update([
      'name' => $request->name,
      'image' => $image_name
    ]);
    return redirect()->route('project');
  }
}
