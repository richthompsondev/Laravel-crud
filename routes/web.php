<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Models\Course;
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

Route::get('/', function () {
    return view('welcome', [
    	'courses' => Course::oldest()->get()
    ]);
});

Route::get('index', function () {
    return view('welcome', [
    	'courses' => Course::oldest()->get()
    ]);
});

Route::get('home', function () {
    return view('welcome', [
    	'courses' => Course::oldest()->get()
    ]);
});
Route::get('courses', function () {
    return view('welcome', [
    	'courses' => Course::oldest()->get()
    ]);
});



Route::resource('courses', CourseController::class);

