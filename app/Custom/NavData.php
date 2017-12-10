<?php 

namespace App\Custom;

class NavData {
  public function __construct() {
    $this->isAuthed = \Auth::check() ;
    $this->user = \Auth::user();
  }

}