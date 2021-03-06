<?php
   namespace App\Http\Models;
   use Illuminate\Database\Eloquent\Model;

   /**
    * Modéle des catégries
    */
   class Categorie extends Model {

       /**
         * The table associated with the model.
         * @var string
         */
        protected $table = 'categories';

        /**
         * Relation ressources et categorie
         * @return 
         */
        public function ressources() {
          return $this->hasMany('App\Ressource', 'categorie');
        }

   }
