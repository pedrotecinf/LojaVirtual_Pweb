<?php

namespace App\Http\Controllers;

class painelAdmin extends Controller
{

  public function getIndex(){
    return view('dashboard.index');
  }

}
