<?php

namespace App\Http\Controllers;

use App\Vak;
use Illuminate\Http\Request;

class OpdrachtenController extends Controller
{
    //Clientside functions

    public function clientside(){
        return view('clientside.overview');
    }

    public function calendar(){
        return view('clientside.calendar');
    }


    //Serverside functions

    public function serverside(){
        return view('serverside.overview');
    }
}
