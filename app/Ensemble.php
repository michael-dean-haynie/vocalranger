<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensemble extends Model
{
  protected $table = 'ensembles';
  protected $guarded = [];

  // relationships
  public function program(){
    return $this->belongsTo('\App\Program')
      ->where('active', 1);
  }

  public function vocalists(){
    return $this->belongsToMany('\App\Vocalist');
  }

  // utilities
  public function getDetailsUrl(){
    return '/ensembles/'.$this->id;
  }
}
