<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model Newsletter : Voyager
 */
class Newsletter extends Model {

  /**
   * Déactive l'association d'une date et une heure à l'inscription à la newsletter'
   * @var bool
   */
  public $timestamps = false;

  /**
   * La table newsletter associée au modèle
   * @var string
   */
  protected $table = 'newsletters';

  /**
   * Attributs à assigner : email
   * @var array
   */
  protected $fillable = ['email'];

}
