<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\User;

class ProgramsController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Index
  |--------------------------------------------------------------------------
  */
  public function get_index(){

    if(\Auth::user()->super_admin){
      $programs = Program::query()
        ->where('active', '=', '1')
        ->orderBy('name', 'asc')
        ->get();
    }
    else{
      $programs = \Auth::user()->programs->sortBy('name');
    }    
    
    return view('programs/index', compact('programs'));
  }


  /*
  |--------------------------------------------------------------------------
  | Details
  |--------------------------------------------------------------------------
  */
  public function get_details($id){
    $program = Program::find($id);

    if (!$this->accessPermitted($program)){
      return response()->view('error')->setStatusCode(401);
    }

    return view('programs/details', compact('program'));
  }


  /*
  |--------------------------------------------------------------------------
  | Utilities
  |--------------------------------------------------------------------------
  */
  private function accessPermitted($program){
    $u = \Auth::user();
    return $program && ($u->super_admin || $program->users->contains($u));
  }
}