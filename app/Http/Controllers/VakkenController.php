<?php

namespace App\Http\Controllers;

use App\Vak;
use Illuminate\Http\Request;

class VakkenController extends Controller
{
    public function index(){
        $vakken = Vak::all();
        return view('vakken.vakken', ['vakken' => $vakken]);
    }

    public function toevoegen(){
        return view('vakken.toevoegen');
    }

    public function opslaan(Request $r){
        $vak = new Vak();
        $vak->naam = $r->input('naam');
        $vak->url = $r->input('url');
        $vak->save();

        return redirect('/vakken');
    }
}
