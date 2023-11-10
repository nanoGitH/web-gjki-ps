<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'GJKI Pematangsiantar',
            'activities' => Activity::all()
        ]);
    }
}
