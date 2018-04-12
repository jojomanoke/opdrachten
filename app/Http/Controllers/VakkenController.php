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

//    public function dynamic($vak, $opdracht = null, $page = null){
//        if(!isset($opdracht)){
//            return view($vak.'.overview');
//        }
//        else if(isset($vak, $opdracht)){
//            if(isset($page)){
//                return view($vak.'.'.$opdracht.'.'.$page);
//            }
//            else{
//                return view($vak.'.'.$opdracht.'.overview');
//            }
//        }
//    }
}
