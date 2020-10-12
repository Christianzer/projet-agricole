<?php

namespace App\Http\Controllers\Jury;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JuryControllers extends Controller
{
    //
    public function connexion(Request $request){
        return view('Jury.dashboard');
    }
}
