<?php

/*
|--------------------------------------------------------------------------
| Routes des ressources
|--------------------------------------------------------------------------
|
*/

// Détails d'une ressource

  Route::get('/{id}', 'RessourcesController@show')
    ->name('ressources.show')
    ->where('id', '[0-9]+');
