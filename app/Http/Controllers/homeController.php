<?php

namespace App\Http\Controllers;



class homeController extends Controller
{

    public function getIndex()
    {
        return view('home.principal');
    }


}
