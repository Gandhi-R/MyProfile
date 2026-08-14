<?php

use App\Http\Controllers\GithubStatsController;

Route::get('/', [GithubStatsController::class, 'show']);