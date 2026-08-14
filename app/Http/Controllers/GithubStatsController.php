<?php

namespace App\Http\Controllers;

use App\Services\GithubStatsService;

class GithubStatsController extends Controller
{
    public function show(GithubStatsService $github)
    {
        $stats = $github->getStats();

        return view('welcome', compact('stats'));
    }
}