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

Route::get('/', function () {
    return view('Admin.module.category.list');
});
Route::get('trangchu', 'HomePublicController@index')->name('home');
Route::get('loginandregister','HomePublicController@getFormLoginAndRegister')->name('getFormLoginAndRegister');
Route::post('registerform','HomePublicController@registerForm')->name('registerform');

Route::post('category','CategoryController@store')->name('create_category');
Route::get('loginadmin','Usercontroller@getForm')->name('getFormAdmin');
Route::post('loginAdmin','Usercontroller@loginAdmin')->name('loginAdmin');
Route::get('logoutAdmin','Usercontroller@logoutAdmin')->name('logoutAdmin');
Route::group(['prefix' => 'admin','middleware'=>'loginAdmin'], function () {
    Route::get('index', 'Usercontroller@index')->name('dashboard');
    Route::group(['prefix' => 'Category'], function () {
        Route::get('category', 'CategoryController@index')->name('listcategory');
        Route::post('category', 'CategoryController@store');
        Route::put('category/{id}', 'CategoryController@update')->middleware('checkRoleAdmin');
        Route::get('category/{id}', 'CategoryController@destroy')->middleware('checkRoleAdmin');;
    });
    Route::group(['prefix' => 'user','middleware'=>'checkRoleAdmin'], function () {
        Route::get('', 'Usercontroller@index')->name('listUser');
        Route::post('', 'Usercontroller@create')->name('addUser');
        Route::put('/{id}', 'Usercontroller@update')->name('updateUser');
        Route::delete('/{id}', 'Usercontroller@destroy')->name('deleteUser');
    });
});


Auth::routes();

