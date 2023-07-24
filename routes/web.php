<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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


Route::get('/', 'PagesController@index');


Route::get('/inner', function () {
    return view('inner');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



//admenu
Route::get('/advantages', 'PagesController@advantages')->name('advantages');
Route::get('/program', 'PagesController@program')->name('program');
Route::get('/teachers', 'TeachersController@index')->name('teachers');
Route::get('/enroll', 'CandidatesController@enroll')->name('enroll');
Route::get('/fees', 'PagesController@fees')->name('fees');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/partners', 'PagesController@partners')->name('partners');
Route::get('/suppliers', 'PagesController@suppliers')->name('suppliers');
Route::get('/history', 'PagesController@history')->name('history');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/eduplan', 'PagesController@history')->name('eduplan');
Route::get('/extras', 'PagesController@history')->name('extras');
Route::get('/projects', 'PagesController@history')->name('projects');

Route::resource('/novitas', 'NovitasController');
