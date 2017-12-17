<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vocalist extends Model
{
  protected $table = 'vocalists';
  protected $guarded = [];

  // relationships
  public function ensemble(){
    return $this->belongsToMany('\App\Ensemble');
  }
}
