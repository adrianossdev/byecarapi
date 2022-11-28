<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(Request $request){
        $dados = $request->all(['email', 'password']);

        $token = auth('api')->attempt($dados);

        if($token){
            //response()->json(['token' => $token])
            //return response()->json(['token' => $token]);
            //return view('teste', ['retorno' => $token]);

            return $token; //retornando o token JWT válido para utilizar na requisição dos dados do cliente.

        }else{
            return 'Dados inválidos';
            //return response()->json(['erro' => 'Dados inválidos'], 403);
        }
    }
}
