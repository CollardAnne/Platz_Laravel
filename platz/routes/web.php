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

// Routes par défaut
  Route::get('/', 'RessourcesController@index')
    ->name('homepage');


// Routes : Voyager
  Route::group(['prefix' => 'admin'], function () {
      Voyager::routes();
  });


// Routes : Authentication
  Auth::routes();


// Routes : Users
  require base_path('routes/users.php');

// Routes : Ressources
  require base_path('routes/ressources.php');


// Routes : Newsletters
  require base_path('routes/newsletters.php');


// Routes : Commentaires
  require base_path('routes/commentaires.php');


/*
|--------------------------------------------------------------------------
| Vue Composer
|--------------------------------------------------------------------------
|
*/

// Vue Composer : Catégories
  View::composer(['categories.menu','categories.menuIcon'], function($view){
    $view->with('categories', App\Http\Models\Categorie::all());
  });
