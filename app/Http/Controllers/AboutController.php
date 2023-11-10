<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Petugas;
use App\Models\Task;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'Tentang Kami'
        ]);
    }

    public function visiMisi()
    {
        return view('about.visiMisi', [
            'title' => 'Visi & Misi'
        ]);
    }

    public function activities()
    {
        return view('about.activityList', [
            'title' => 'Aktivitas',
            'activities' => Activity::latest()->get()
        ]);
    }
    public function activity(Activity $activity)
    {
        return view('about.activity', [
            'title' => $activity->name,
            'activity' => $activity
        ]);
    }

    public function petugas()
    {
        return view('about.petugasList', [
            'title' => 'Petugas',
            'petugas' => Petugas::all()
        ]);
    }
    public function petugasSingle(Petugas $petugas)
    {
        return view('about.petugas', [
            'title' => $petugas->name,
            'petugas' => $petugas
        ]);
    }

    public function tasks()
    {
        return view('about.tasks', [
            'title' => 'Tasks',
            'tasks' => Task::all()
        ]);
    }
    public function task(Task $task)
    {
        return view('about.petugasList', [
            'title' => 'Petugas ' . $task->name,
            'petugas' => $task->petugas
        ]);
    }

    public function schedule()
    {
        return view('about.schedule', [
            'title' => 'Jadwal',
        ]);
    }
}
