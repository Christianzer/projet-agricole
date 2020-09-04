<?php

namespace App\Http\Controllers\Inscription;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InscriptionControllers extends Controller
{
    //

    public function index(){
        return view('Inscription/index');
    }
}
