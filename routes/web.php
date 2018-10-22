<?php

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
Route::get('/', function () {
    return view('welcome', [
        'name' => 'World'
    ]);
});

*/

/*
Route::get('/', function () {
    $name ='LaraCast';
    return view('welcome', compact('name'));
});

*/


Route::get('/', function () {
    $tasks = [
        ' Watch LaraCast'
        , 'Go shopping'
        , 'Meet Jim at airport'
    ];

    $name ='My task list';

    return view('welcome', compact('tasks', 'name'));
});


Route::get('/about', function () {
    return view('about');
});