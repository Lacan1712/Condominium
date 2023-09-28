<?php

namespace App\Http\Controllers\homelogin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        return view('Log In.homelogin');
    }

    public function store(Request $request){

        //Valida os dados do usuário
        $request -> validate([
            'email' => 'required | email',
            'password' => 'required',

        ]);

        // Armanzena credenciais
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        //Autenficação de usuário
        if(Auth::attempt($credentials)){
            return redirect('/condominium');
        }

    }


   public function pageIndex(){

        return view('teste');



   }
}
