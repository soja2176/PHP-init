<?php

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
/*

GET /projects/1 => show
PATCH /projects/1 (update)
GET /projects/1/edit (edit)
DELETE /projects/1 (destroy)
*/

Route::resource('projects', 'App\Http\Controllers\ProjectsController'); // resource: create, update, delete, show, index, store, destroy
Route::get('/', 'App\Http\Controllers\PagesController@home')->name('home');
Route::get('/about', 'App\Http\Controllers\PagesController@about')->name('about');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::patch('/task/{task}', 'App\Http\Controllers\ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'App\Http\Controllers\ProjectTasksController@store');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

