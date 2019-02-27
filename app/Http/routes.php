<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');


Route::get('/cnic', 'HomeController@getCnic');

Route::get('/cnicPost/{cnicNum}', 'HomeController@postCnic');

Route::get('/bio', 'HomeController@biometric');

Route::get('/details', 'HomeController@getDetails');

Route::get('/NABallot', 'HomeController@NABallot');

Route::get('/PSBallot', 'HomeController@PSBallot');

Route::get('/logout', 'HomeController@logout');

Route::get('/admin', 'AdminController@login');

Route::get('/admin/blank', 'AdminController@blank');

Route::get('/admin/result', 'AdminController@result');

Route::get('/admin/userProfile', 'AdminController@profile');

Route::get('/admin/candidate/add', 'AdminController@addCandidate');

Route::get('/admin/candidates', 'AdminController@candidate');

Route::get('/admin/voters', 'AdminController@voter');

Route::get('/admin/voter/add', 'AdminController@addVoter');
// Route::get('/admin/voter/edit/{id}', 'AdminController@editVoter');
// Route::get('/admin/voter/delete/{id}', 'AdminController@deleteVoter');
