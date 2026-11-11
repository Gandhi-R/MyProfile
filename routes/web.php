<?php

use Illuminate\Support\Facades\Route;
use App\Models\Project; // Wajib dipanggil biar Laravel tahu modelnya
use App\Models\Skill;
use App\Models\Certificate;
use App\Services\GithubStatsService;

Route::get('/', function (GithubStatsService $github) {
    // Ambil SEMUA data dari tabel projects
    $projects = Project::all(); 
    $skills = Skill::all();
    $certificates = Certificate::all();
    $stats = $github->getStats();
    
    return view('welcome', compact('projects', 'skills', 'certificates', 'stats'));
});