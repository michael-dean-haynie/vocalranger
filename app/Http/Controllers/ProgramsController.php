<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Program;

class ProgramsController extends Controller
{
  public function index(){
    
    $programs = Program::all()->where('active', 1)->sortByDesc('name');
    return view('programs/index', compact('programs'));
  }
}