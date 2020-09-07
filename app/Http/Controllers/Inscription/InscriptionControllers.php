<?php

namespace App\Http\Controllers\Inscription;

use App\Http\Controllers\Controller;
use App\Models\Inscription\type_diplome;
use App\Models\Inscription\type_piece;
use Illuminate\Http\Request;


class InscriptionControllers extends Controller
{
    //

    public function index(){
        return view('Inscription/index');
    }

    public function inscription(){
        //recuperer type pieces
        $listes_pieces = type_piece::all();
        $listes_diplomes = type_diplome::all();


        //recuperer type diplomes
        return view('Inscription/inscription')->with('listes_pieces',$listes_pieces)->with('listes_diplomes',$listes_diplomes);

    }
}
