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
// Route::get('/projects', 'App\Http\Controllers\ProjectsController@index')->name('projects');
// Route::post('/projects', 'App\Http\Controllers\ProjectsController@store')->name('projects');
// Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create')->name('projects.create');
// Route::get('/projects/{project}', 'App\Http\Controllers\ProjectsController@show')->name('projects.show');
// Route::get('/projects/{project}/edit', 'App\Http\Controllers\ProjectsController@edit')->name('projects.edit');
// Route::patch('/projects/{project}', 'App\Http\Controllers\ProjectsController@update')->name('projects.update');
// Route::delete('/projects/{project}', 'App\Http\Controllers\ProjectsController@destroy')->name('projects.destroy');
