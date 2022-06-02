<?php

use Illuminate\Support\Facades\Route;

/* SITE */
route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);


/* people */
Route::get('people/index', ['as' => 'people.index', 'uses' => 'PeopleController@index']);
Route::get('people/show/{id}', ['as' => 'people.show', 'uses' => 'PeopleController@show']);
Route::get('countries', ['as' => 'country.index', 'uses' => 'CountryController@index']);
Route::get('contact/country/{country}', ['as' => 'contact.show', 'uses' => 'ContactController@index']);


/* Grupo de rotas autenticadas */
Route::middleware(['auth'])->group(function () {

    /* User */
    Route::get('user/index', ['as' => 'user.index', 'uses' => 'UserController@index']);
    Route::get('user/show/{id}', ['as' => 'user.show', 'uses' => 'UserController@show']);

    Route::get('user/edit/{id}', ['as' => 'user.edit', 'uses' => 'UserController@edit']);
    Route::put('user/update/{id}', ['as' => 'user.update', 'uses' => 'UserController@update']);

    Route::get('user/delete/{id}', ['as' => 'user.delete', 'uses' => 'UserController@destroy']);
    /* end user */

    /* contact */
    Route::get('contact/create/{id}', ['as' => 'contact.create', 'uses' => 'ContactController@create']);
    Route::post('contact/store/{id}', ['as' => 'contact.store', 'uses' => 'ContactController@store']);

    Route::get('contact/edit/{id}', ['as' => 'contact.edit', 'uses' => 'ContactController@edit']);
    Route::put('contact/update/{id}', ['as' => 'contact.update', 'uses' => 'ContactController@update']);

    Route::get('contact/delete/{id}', ['as' => 'contact.delete', 'uses' => 'ContactController@destroy']);
    /* End contact */

    /* people */
    Route::get('people/create', ['as' => 'people.create', 'uses' => 'PeopleController@create']);
    Route::post('people/store', ['as' => 'people.store', 'uses' => 'PeopleController@store']);

    Route::get('people/edit/{id}', ['as' => 'people.edit', 'uses' => 'PeopleController@edit']);
    Route::put('people/update/{id}', ['as' => 'people.update', 'uses' => 'PeopleController@update']);

    Route::get('people/delete/{id}', ['as' => 'people.delete', 'uses' => 'PeopleController@destroy']);
    /* end people */


});
/* auth.php */
require __DIR__ . '/auth.php';


