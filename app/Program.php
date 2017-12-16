<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
  protected $table = 'programs';
  protected $guarded = [];

  // relationships
  public function defaultSystem(){
    return $this->hasOne('App\System', 'id', 'default_system_id');
  }

  public function ensembles(){
    return $this->hasMany('App\Ensemble');
  }

  public function users(){
    return $this->belongsToMany('\App\User');
  }

  public function vocalists(){
    return $this->hasMany('App\Vocalist');
  }

  // utilities
  public function getDetailsUrl(){
    return '/programs/'.$this->id;
  }
}