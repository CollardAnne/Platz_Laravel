<?php

namespace App;

  use Illuminate\Database\Eloquent\Model;
  use App\Models\Ressource;

  /**
   * Model Commentaire : Voyager
   */
  class Commentaire extends Model {

    /**
     * Déactive l'association d'une date et une heure à la création d'un commentaire
     * @var bool
     */
    public $timestamps = false;

    /**
     * Attributs à assigner : user_id, texte et ressource
     * @var array
     */
    protected $fillable = ['user_id', 'texte', 'ressource'];

    /**
     * Relation avec les utilisateur
     * @return
     */
    public function user() {

      return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relation avec les ressources
     * @return 
     */
    public function resource() {

      return $this->belongsTo(Ressource::class, 'ressource');
    }

  }
