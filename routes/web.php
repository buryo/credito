<?php

use App\Organisaties;
Auth::routes();

Route::get('/', 'Controller@index');
Route::get('/home', 'Controller@index');


Route::get('/organisaties', 'OrganisatiesController@index');
Route::get('/organisaties/{id}', 'OrganisatiesController@show');
Route::post('/organisaties/{id}', 'gebruikerController@delete');


Route::get('/gebruikers/{gebruiker}', 'gebruikerController@getUser');
Route::post('/gebruikers/{gebruiker}', 'gebruikerController@updateUser');

Route::get('/gebruiker-zoeken/{organisatie}', 'gebruikerController@getAllUsers');

Route::get('/organisaties/{id}/medewerker-aanmaken', 'gebruikerController@indexPage');
Route::post('/organisaties/{id}/medewerker-aanmaken', 'gebruikerController@store');


Route::get('/logged', 'LoggedController@index')->name('logged');
