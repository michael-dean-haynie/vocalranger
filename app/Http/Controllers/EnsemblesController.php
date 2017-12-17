<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ensemble;

class EnsemblesController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Index
  |--------------------------------------------------------------------------
  */

  /*
  |--------------------------------------------------------------------------
  | Details
  |--------------------------------------------------------------------------
  */
  public function get_details($id){
    $ensemble = Ensemble::find($id);

    if (!$this->accessPermitted($ensemble)){
      return response()->view('error')->setStatusCode(401);
    }

    return view('ensembles/details', compact('ensemble'));
  }


  /*
  |--------------------------------------------------------------------------
  | Utilities
  |--------------------------------------------------------------------------
  */
  private function accessPermitted($model){
    $u = \Auth::user();
    return $model && ($u->super_admin || $model->program->users->contains($u));
  }
}