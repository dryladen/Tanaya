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
        "projects" => Project::sortable()->paginate(10)
      );
    }
    confirmDelete("Hapus Proyek", "Apa anda yakin ingin menghapus proyek ini?");
    return view('admin.project', $data);
  }
  function store(Request $request)
  {
    // validate request task,company,location,comodity,month,years
    $request->validate([
      'task' => 'required',
      'company' => 'required',
      'location' => 'required',
      'comodity' => 'required',
      'month' => 'required',
      'years' => 'required'
    ], [
      'task.required' => 'Tugas wajib di isi',
      'company.required' => 'Perusahaan wajib di isi',
      'location.required' => 'Lokasi wajib di isi',
      'comodity.required' => 'Komoditas wajib di isi',
      'month.required' => 'Bulan wajib di isi',
      'years.required' => 'Tahun wajib di isi'
    ]);
    // create new project
    Project::create([
      'task' => $request->task,
      'company' => $request->company,
      'location' => $request->location,
      'comodity' => $request->comodity,
      'month' => $request->month,
      'years' => $request->years
    ]);
    return redirect('project')->with('success', 'Data berhasil ditambahkan');
  }
  function edit(Request $request, $id)
  {
    // validate request name
    $request->validate([
      'task' => 'required',
      'company' => 'required',
      'location' => 'required',
      'comodity' => 'required',
      'month' => 'required',
      'years' => 'required'
    ], [
      'task.required' => 'Tugas wajib di isi',
      'company.required' => 'Perusahaan wajib di isi',
      'location.required' => 'Lokasi wajib di isi',
      'comodity.required' => 'Komoditas wajib di isi',
      'month.required' => 'Bulan wajib di isi',
      'years.required' => 'Tahun wajib di isi'
    ]);
    // get project by id
    $project = Project::find($id);
    
    // update project
    Project::where('id', $id)->update([
      'task' => $request->task,
      'company' => $request->company,
      'location' => $request->location,
      'comodity' => $request->comodity,
      'month' => $request->month,
      'years' => $request->years
    ]);
    return redirect('project')->with('success', 'Data berhasil diubah');
  }
  function delete($id)
  {
    // get project by id
    $project = Project::find($id);
    // delete project
    $project->delete();
    return redirect('project')->with('success', 'Data berhasil dihapus');
  }
}
