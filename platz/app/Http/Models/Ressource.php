<?php
   namespace App\Http\Models;
   use Illuminate\Database\Eloquent\Model;

   /**
    * Modèles des Ressources
    */
   class Ressource extends Model {

       /**
         * The table associated with the model.
         * @var string
         */
        protected $table = 'ressources';

        /**
         * Relation avec les utilisateurs
         * @return array
         */
        public function users(){
          return $this->belongsTo('\App\User', 'user');
        }

        /**
         * Relation avec les catégories
         * @return array
         */
        public function categories(){
          return $this->belongsTo('\App\Categorie', 'categorie');
        }

        /**
         * Relation avec les commentaires
         * @return array
         */
        public function commentaires(){
          return $this->hasMany('\App\Commentaire', 'ressource');
      }
   }
