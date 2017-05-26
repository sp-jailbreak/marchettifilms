<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

public function home()
{
  return view ('home');
}


public function services()
{
  return view ('services');
}

public function team()
{
  return view ('team');
}

public function social()
{
  return view ('social');
}

public function dna()
{
  return view ('dna');
}


}
