<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PluginController;
use App\Http\Middleware\TokenAuthencationMiddleware;
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

Route::get('/', function () {
    return view('frontend.layouts.master');
});


// Route::get('/', function () {
//     return view('backend.pages.dashboard');
// });

// api
Route::post('/admin-login', [AdminController::class, 'login']);
Route::post('/company-registration', [CompanyController::class, 'companyRegistration'])->name('company-registration');
Route::post('/company-login', [CompanyController::class, 'companyLogin'])->name('company-login');
Route::get('/company-list', [CompanyController::class, 'companyList'])->name('company-list');
Route::get('/job-list', [JobController::class, 'jobList'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('job-list');

Route::get('/job-list-page', [JobController::class, 'jobListPage'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('job-list-page');
Route::post('/create-job', [JobController::class, 'CreateJob'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('create-job');
Route::post('/delete-job', [JobController::class, 'deletJob'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('delete-job');
Route::post('/update-job', [JobController::class, 'updateJob'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('update-job');
Route::post('/job-by-id', [JobController::class, 'jobById'])
    ->middleware([TokenAuthencationMiddleware::class])
    ->name('job-by-id');

// admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'adminDashboard'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('admin-dashboard');
    Route::get('/companyList', [CompanyController::class, 'companyListPage'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('compayList');

    Route::get('/blogs', [BlogController::class, 'blogs'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('blogs');
    Route::get('/plugins', [PluginController::class, 'plugins'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('plugins');
    Route::get('/login', [AdminController::class, 'loginView'])
        ->name('admin-login');
    Route::get('/logout', [AdminController::class, 'logout'])
        ->name('admin-logout');
});




// company
Route::prefix('company')->group(function () {
    Route::get('/registration', [CompanyController::class, 'companyRegistrationPage'])->name('company-registration-view');
    Route::get('/login', [CompanyController::class, 'companyLoginPage'])->name('company-login-view');
    Route::get('/dashboard', [DashboardController::class, 'companyDashboard'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('company-dashboard');
    Route::get('/logout', [CompanyController::class, 'logout'])->name('company-logout');
    Route::post('/delete-company', [CompanyController::class, 'deleteCompany'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('delete-company');

    Route::post('/update-company', [CompanyController::class, 'updateCompany'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('update-company');

    Route::post('/company-by-id', [CompanyController::class, 'companyById'])
        ->middleware([TokenAuthencationMiddleware::class])
        ->name('company-by-id');
});



// Front end

Route::get('/get-all-jobs', [JobController::class, 'getAllJobs'])->name('get-all-jobs');
