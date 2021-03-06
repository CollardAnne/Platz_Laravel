<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Model User : Voyager
 */
class User extends \TCG\Voyager\Models\User {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relation commentaire et utilisateur
     * @return
     */
    public function comments() {
      return $this->hasMany(Commentaire::class, 'user_id');
    }

    /**
     * Relation ressources et utilisateur
     * @return 
     */
    public function ressources() {
      return $this->hasMany('App\Ressource', 'user');
    }
}
