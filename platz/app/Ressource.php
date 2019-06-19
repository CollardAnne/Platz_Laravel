<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

  /**
   * Model Ressource : Voyager
   */
  class Ressource extends Model {

    /**
     * Déactive l'association d'une date et une heure à la création d'une ressource
     * @var bool
     */
    public $timestamps = false;

  }
