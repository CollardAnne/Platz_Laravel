<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Newsletter extends Model
{
  public $timestamps = false;
  protected $table = 'newsletters';
  protected $fillable = ['email'];

}
