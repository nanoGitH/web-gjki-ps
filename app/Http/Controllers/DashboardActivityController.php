<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardActivityController extends Controller
{
    /**
     * Display a listing of the resource. Menampilkan semua data berdasarkan user tertentu(?)
     */
    public function index()
    {
        return view('dashboard.activities.index', [
            'activities' => Activity::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource. Menampilkan halaman tambah activity(postingan)
     */
    public function create()
    {
        return view('dashboard.activities.create');
    }

    /**
     * Store a newly created resource in storage. Untuk menjalankan function create diatas
     */
    public function store(Request $request)
    {
        $validatedData =  $request->validate([
            'name' => ['required', 'max:100'],
            'slug' => ['required', 'unique:activities'],
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Activity::create($validatedData);

        return redirect('dashboard/activities')->with('success', 'berhasil menambahkan data');
    }

    /**
     * Display the specified resource. Lihat (halaman) detail dari sebuah activity(postingan)
     */
    public function show(Activity $activity)
    {
        return view('dashboard.activities.show', [
            'activity' => $activity
        ]);
    }

    /**
     * Show the form for editing the specified resource. Menampilkan halaman ubah data activity(postingan)
     */
    public function edit(Activity $activity)
    {
        return view('dashboard.activities.edit', [
            'activity' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage. Untuk menjalankan function edit diatas
     */
    public function update(Request $request, Activity $activity)
    {
        $rules = [
            'name' => ['required', 'max:100'],
            'body' => 'required'
        ];

        if($request->slug != $activity->slug) {
            $rules['slug'] = ['required', 'unique:activities'];
        }

        $validatedData = $request->validate($rules);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100, '...');

        Activity::where('id', $activity->id)->update($validatedData);

        return redirect('dashboard/activities')->with('success', 'berhasil memperbarui data');
    }

    /**
     * Remove the specified resource from storage. Untuk delete data
     */
    public function destroy(Activity $activity)
    {
        Activity::destroy($activity->id);

        return redirect('dashboard/activities')->with('success', 'berhasil menghapus data');
    }
}
