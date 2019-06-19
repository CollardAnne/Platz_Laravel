<?php

  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Http\Models\Commentaire as CommentairesMdl;
  use Illuminate\Support\Facades\View;
  use App\Commentaire;
  use Response;
  use Illuminate\Support\Facades\Auth;

  /**
   *  Controller des commentaires
   */

  class CommentairesController extends Controller {

    /**
     * Liste des commentaires
     * @return array [Ensemble des commentaires]
     */
    public function index( ) {
      $commentaires = CommentairesMdl::get();
      return View::make('commentaires.form',
      ['commentaires' => $commentaires]);
    }

    /**
     * Détail d'un commentaire
     * @param  int $id  [Identifiant du commentaire]
     * @return array    [Commentaire : texte, id, user, ressource, date de création]
     */
    public function show($id){
      $commentaire = Commentaire::find($id);
      $ressource = Ressource::with('commentaires.user')->where('id', $id)->first();
      $commentaire = $ressource->commentaires;

      return View::make('commentaires.show', ['commentaire'=>$commentaire]);
    }

    /**
     * Ajax : Ajout du commentaire d'une ressource
     * @param  Request  $request
     * @param  array    $data
     * @return          [Response]
     */
    public function ajaxInsert(Request $request, array $data = null){

        /**
         * [if Vérifier si l'auteur est authentifié]
         * @var [type]
         */
        if (Auth::check()) {
          $data= new Commentaire();
          $data->texte = $request['texte'];
          $data->ressource= $request['ressource'];
          $data->user_id = $request['user_id'];
          // Je récupère l'id de l'auteur
          $data->user_id = auth()->user()->id;
          $data->save();

          $data->user_name = auth()->user()->name;
          $data->user_avatar = auth()->user()->avatar;

          return Response()->json($data);

        }
        return response()->json([], 422);
      }
    }
