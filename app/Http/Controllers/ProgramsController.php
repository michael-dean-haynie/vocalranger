<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;
use App\User;

class ProgramsController extends Controller
{
  public function index(){

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
}