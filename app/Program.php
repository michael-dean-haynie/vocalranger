<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  protected $table = 'programs';
  protected $guarded = [];

  public function defaultSystem(){
    return $this->hasOne('App\System', 'id', 'default_system_id');
  }

  public function ensembles(){
    return $this->hasMany('App\Ensemble');
  }

  public function vocalists(){
    return $this->hasMany('App\Vocalist');
  }

}