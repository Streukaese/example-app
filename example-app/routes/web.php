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
        'job' => Job::find($slug)
    ]);

})->where('job', '[A-z_\-]+');














// Route::get('/jobs', [JobController::class, 'show'])->name('jobs.index');    
// Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
// Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
// Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
// Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
// Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

// Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
// Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
// Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
// Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
// Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
// Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');