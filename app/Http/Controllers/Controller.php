<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function aut_login(Request $request){
        //Método de validação
        $validacao = $request->validate(
            //Array de regras de validação
            [
                'email' => 'required',
                'password' => 'required'
            ]

        );
    }

    public function logIn(Request $request){


    }

}
