<?php

namespace App\Http\Controllers\Jury;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JuryControllers extends Controller
{
    //
    public function index(){
        return view('Jury.connexionjury');
    }

    public function connexion(Request $request){
        $pass = array('identifiant'=>$request->post('email'),'mdp_jury'=>$request->post('pass'));
        
    }
}
