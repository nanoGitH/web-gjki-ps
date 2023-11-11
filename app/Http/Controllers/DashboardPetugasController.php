<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class DashboardPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.petugas.index', [
            'petugas' => Petugas::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => ['required', 'unique:petugas'],
            'task' => 'required',
            'task_id' => 'required',
            'phone' => 'required'
        ]);

        Petugas::create($validatedData);
        
        return redirect('dashboard/petugas')->with('success', 'berhasil menambahkan data petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $petugas = Petugas::where('slug', $slug)->first();
        return view('dashboard.petugas.show', [
            'petugas' => $petugas
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $petugas = Petugas::where('slug', $slug)->first();
        return view('dashboard.petugas.edit', [
            'petugas' => $petugas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $petugas = Petugas::where('slug', $slug)->first();
        $rules = [
            'name' => 'required',
            'task' => 'required',
            'task_id' => 'required',
            'phone' => 'required'
        ];

        if($request->slug != $petugas->slug) {
            $rules['slug'] = ['required', 'unique:petugas'];
        }

        $validatedData = $request->validate($rules);

        Petugas::where('id', $petugas->id)->update($validatedData);

        return redirect('dashboard/petugas')->with('success', 'berhasil memperbarui data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $petugas = Petugas::where('slug', $slug)->first();
        Petugas::destroy($petugas->id);

        return redirect('dashboard/petugas')->with('success', 'berhasil menghapus data');
    }
}
