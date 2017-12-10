<?php 

namespace App\Custom;

class Helpers {
  static function checkAct($activeMenu, $target) {
    if (isset($activeMenu)){
      return $activeMenu == $target ? 'active' : '';
    }
  }

}