<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Categorie : Voyager
 */
class Categorie extends Model {

    /**
     * Déactive l'association d'une date et une heure à la création d'une categorie
     * @var bool
     */
    public $timestamps = false;

    /**
     * Relation ressources et categorie
     * @return
     */
    public function ressources() {
      return $this->hasMany('App\Ressource', 'categorie');
    }

}
