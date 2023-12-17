<?php

use Illuminate\Support\Facades\Route;
use App\Models\todo;
use App\Http\Controllers\TodoController;


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
/*
Route::get('/', function () {
    return view('view_list')->with('todo_arr',todo::all());
});
*/
//instead of using the finction directly here , we're going to call the controller

Route::get('/','App\Http\Controllers\TodoController@index');

Route::get('create','App\Http\Controllers\TodoController@create');

Route::get('save_new_list','App\Http\Controllers\TodoController@store');


//This routes include a parameter 'id' in the URL, allowing you to specify a ToDo item ID to delete/edit/update :


Route::get('delete/{id}','App\Http\Controllers\TodoController@destroy');

//This route is for displaying a form to edit an existing ToDo item.
Route::get('edit/{id}','App\Http\Controllers\TodoController@edit');

//This route handles the submission of the form created in the 'edit' route
Route::get('update_list/{id}','App\Http\Controllers\TodoController@update');