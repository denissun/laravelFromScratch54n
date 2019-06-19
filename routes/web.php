<?php

Route::get('/', 'PostsController@index');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');

// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table