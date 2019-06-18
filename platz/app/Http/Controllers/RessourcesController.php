<?php
   namespace App\Http\Controllers;

   use App\Http\Models\Ressource as RessourcesMdl;
   use Illuminate\Support\Facades\View;

   /**
    *  Controller des ressources
    */
   class RessourcesController extends Controller {


     /**
      * Liste des ressources
      * @return array [Ensemble des ressources à afficher]
      */
     public function index(){

         if (request()->has('categorie')) {
           /* Recherche les ressources par categories : if request categorie et Pagination.*/
           $ressources = RessourcesMdl::with('categories')->where('categorie', request('categorie'))->orderBy('date', 'desc')->paginate(8)->appends('categorie', request('categorie'));
         }
         else {
           /* Recherche toutes les ressources et Pagination.*/
           $ressources = RessourcesMdl::with('categories')->orderBy('date', 'desc')->paginate(8);
         }
        return View::make('ressources.index', ['ressources' => $ressources ]);
      }


      /**
       * Détail d'une ressource
       * @param  int $id  [Identifiant de la ressource à afficher]
       * @return array    [Ressource à afficher et les ressources similaires]
       */
     public function show($id){
        $ressource = RessourcesMdl::with('users')->find($id);

        /* Recherche les ressources d'une même catégorie et en excluant la ressource actuelle */
        $ressourcesRelated = RessourcesMdl::with('categories')
                                          ->where([
                                                  ['categorie',$ressource->categorie],
                                                  ['id','<>',$ressource->id]
                                                ])
                                          ->take(4)
                                          ->get();

        return View::make('ressources.show', [
          'ressource' => $ressource,
          'ressourcesRelated' => $ressourcesRelated
        ]);
     }

   }
