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
Route::get('/advantages', 'PagesController@index')->name('advantages');
Route::get('/program', 'PagesController@index')->name('program');
Route::get('/teachers', 'PagesController@index')->name('teachers');
Route::get('/enroll', 'PagesController@index')->name('enroll');
Route::get('/fees', 'PagesController@index')->name('fees');
Route::get('/about', 'PagesController@index')->name('about');
Route::get('/partners', 'PagesController@index')->name('partners');
