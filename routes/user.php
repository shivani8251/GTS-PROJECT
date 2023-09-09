<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\IndexController;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

        // Route::get('/home', [App\Http\Controllers\IndexController::class, 'index'])->name('/home');

        Route::get('/', [IndexController::class, 'Home_index'])->name('/home');

        Route::get('/search_univercity', [IndexController::class, 'universities_search'])->name('/search_univercity');

        Route::get('/study_abroad', [IndexController::class, 'study_abroad'])->name('/study_abroad');

        Route::get('/course_search', [IndexController::class, 'courses'])->name('/course_search');

        Route::get('/About_us', [IndexController::class, 'About'])->name('/About_us');

        Route::get('/students', [IndexController::class, 'Students'])->name('/students');

        Route::get('/Recruitment', [IndexController::class, 'recruitment'])->name('/recruitment');

        Route::get('/coaching', [IndexController::class, 'Price_table'])->name('/coaching');

        Route::get('/contact_us', [IndexController::class, 'contact'])->name('/contact_us');

        Route::get('/course_detail/{id}', [IndexController::class, 'blog'])->name('/course_detail');

        Route::post('/contact.form', [IndexController::class, 'contact_form'])->name('contact.form');

         Route::get('/country.name', [IndexController::class, 'country_name'])->name('country_name');

         Route::post('/join_student.form', [IndexController::class, 'join_form'])->name('join_student.form');





















