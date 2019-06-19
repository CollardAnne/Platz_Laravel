<?php

/*
|--------------------------------------------------------------------------
| Routes des newsletters
|--------------------------------------------------------------------------
|
*/

// Enregistrement à la newsletter

  Route::post('/newsletters/store', 'NewslettersController@store')
    ->name('newsletters.store');
