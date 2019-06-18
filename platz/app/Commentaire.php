<?php

namespace App;

  use Illuminate\Database\Eloquent\Model;


  /**
   * Model Commentaire : Voyager
   */
  class Commentaire extends Model {

    /**
     * Déactive l'association d'un date et une heure à la création d'un commentaire
     * @var bool
     */
    public $timestamps = false;

    /**
     * Attributs à assigner
     * @var array
     */
    protected $fillable = ['user_id'];
  }
