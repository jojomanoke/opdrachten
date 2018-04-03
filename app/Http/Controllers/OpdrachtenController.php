<?php

namespace App\Http\Controllers;

use App\Event;
use App\Vak;
use Illuminate\Http\Request;

class OpdrachtenController extends Controller
{
    //Clientside functions

    public function clientside(){
        return view('clientside.overview');
    }


    //Serverside functions

    public function serverside(){
        return view('serverside.overview');
    }
}
