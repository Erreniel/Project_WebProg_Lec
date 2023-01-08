<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/homeUser', function () {
//     return view('homeUser');
// })->name('home');

Route::get('/homeUser', [CompanyController::class, 'getCompany'])->name('home');
Route::get('/homeAdmin', function () {
    return view('homeAdmin');
});
// Route::get('/descEdit', function () {
//     return view('descEdit');
// });
Route::get('/reqEdit', function () {
    return view('reqEdit');
});
// Route::get('/companyUser', function () {
//     return view('companyProfileUser');
// });
Route::get('/companyAdmin', function () {
    return view('companyProfileAdmin');
});
Route::get('/detailAdmin', function () {
    return view('jobDetailAdmin');
});
// Route::get('/detailUser', function () {
//     return view('jobDetailUser');
// });
// Route::get('/jobUser', function () {
//     return view('JobUser');
// });
Route::get('/bookmark', function () {
    return view('bookmark');
});
Route::get('/', function () {
    return view('login');
});
Route::get('/signUp', [UserController::class,'showSignUp'])->name('showSignUp');
Route::post('/signUp', [UserController::class,'register'])->name('register');
Route::get('/login', [UserController::class,'showLogin'])->name('showLogin');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class, 'logout'])->name('logout');

Route::get('/profile', [UserController::class, 'viewProfile'])->name('viewProfile');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs');

Route::get('/jobDetail/{id}', [JobController::class, 'viewJob'])->name('jobDetail');

Route::get('/companyDetail/{id}', [CompanyController::class, 'viewCompany'])->name('companyDetail');

// Route::get('/addCompany', function () {
//     return view('addCompany');
// });

Route::get('/addCompany', [CompanyController::class, 'showAddCompany'])->name('showAddCompany');

Route::post('/addCompany', [CompanyController::class, 'addCompany'])->name('addCompany');

Route::get('/descriptionEdit/{id}', [CompanyController::class, 'showEditDescription'])->name('showEditDescription');

Route::post('/descriptionEdit/{id}', [CompanyController::class, 'editDescription'])->name('editDescription');

Route::get('/requirementEdit/{id}', [CompanyController::class, 'showEditRequirement'])->name('showEditRequirement');

Route::post('/requirementEdit/{id}', [CompanyController::class, 'editRequirement'])->name('editRequirement');

Route::get('/addJob/{id}', [JobController::class, 'showAddJob'])->name('showAddJob');

Route::post('/addJob/{id}', [JobController::class, 'addJob'])->name('addJob');

Route::get('/deleteJob/{id}', [JobController::class, 'deleteJob'])->name('deleteJob');

Route::get('/deleteCompany/{id}', [CompanyController::class, 'deleteCompany'])->name('deleteCompany');

// Route::get('/addJob', function () {
//     return view('addJob');
// });


// Route::get('/profile', function () {
//     return view('profile');
// });
