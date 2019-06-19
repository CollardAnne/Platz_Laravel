<?php

/*
|--------------------------------------------------------------------------
| Routes des commentaires
|--------------------------------------------------------------------------
|
*/

// Formulaire d'ajout de commentaire

  Route::get('/commentaires/form', 'CommentairesController@index')
    ->name('commentaires.form');


// Insert Ajax

  Route::get('/ajax/insert', 'CommentairesController@ajaxInsert')
    ->name('ajax.insert');
