<?php

Auth::routes();

Route::group(['prefix' => 'admin/', 'middleware'=>'auth'], function(){

Route::get('posts/thrash', 'PostController@thrash')->name('posts.thrash');
Route::get('posts/restore/{id}', 'PostController@restore')->name('posts.restore');
Route::get('posts/kill/{id}', 'PostController@kill')->name('posts.kill');

//Add posts routes
Route::resource('posts', 'PostController');

Route::resource('categories', 'CategoryController');

Route::resource('tags', 'TagController');

Route::get('make/admin/{id}', 'UserController@make_admin')->name('make.admin');

Route::get('remove/admin/{id}', 'UserController@remove_admin')->name('remove.admin');
    
Route::get('myprofile', 'UserController@my_profile')->name('users.profile');  
    
Route::resource('users', 'UserController');    

Route::get('settings', 'SettingController@settings')->name('settings');
    
Route::put('settings/update/{id}', 'SettingController@update')->name('settings.update');
    
Route::get('/home', 'HomeController@index')->name('home');
});

Route::get('/category/{id}', 'PagesController@category')->name('category.single');

Route::get('/{slug}', 'PagesController@single')->name('page.single');

Route::get('/', 'PagesController@index')->name('page.index');

