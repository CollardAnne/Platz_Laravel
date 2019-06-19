<?php

/*
|--------------------------------------------------------------------------
| Routes des users
|--------------------------------------------------------------------------
|
*/

// Authentification

Route::middleware('auth')->group(function () {
  Route::get('/mon-profil', 'UsersController@edit')->name('users.edit');
  Route::patch('/mon-profil', 'UsersController@update')->name('users.update');

  Route::get('/mes-ressources', 'RessourcesController@indexByUser')->name('ressources.indexByUser');
});
