<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Job;

Route::get('/', function () {
    // $jobs = Job::all();
        // return view('jobs', [
            // 'jobs' => $jobs
        return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('jobs/{job}', function ($slug) {
    return view('job', [
        'job' => Job::findOrFail($slug)
    ]);
});