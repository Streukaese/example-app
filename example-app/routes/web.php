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

use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('jobs');
});
Route::get('jobs/{job}', function ($slug) {
    if(! file_exists($path = file_get_contents(__DIR__ . "/../resources/jobs/{$slug}.html"))) {
        return redirect('/');
    }

    // $job = cache()->remember("jobs.{$slug}", 1200, function () use ($path) {
        // var_dump('file_get_contents');
        // return file_get_contents($path);
    // });
    $job = cache()->remember("jobs.{$slug}", 1200, fn () => file_get_contents($path));


    return view('job', ['job' => $job]);
})->where('job', '[A-z_\-]+');

Route::get('/jobs', [JobController::class, 'show'])->name('jobs.index');    
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');

Route::get('/companies', [CompanyController::class, 'index'])->name('companies.index');
Route::get('/companies/{company}', [CompanyController::class, 'show'])->name('companies.show');
Route::get('/companies/create', [CompanyController::class, 'create'])->name('companies.create');
Route::post('/companies', [CompanyController::class, 'store'])->name('companies.store');
Route::get('/companies/{company}/edit', [CompanyController::class, 'edit'])->name('companies.edit');
Route::put('/companies/{company}', [CompanyController::class, 'update'])->name('companies.update');

