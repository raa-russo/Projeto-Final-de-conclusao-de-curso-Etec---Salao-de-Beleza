<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     return redirect()->route('logado');
        // } else {
        //    return back()->withErrors('Credenciais inválidas.');
        // }
        $checkUser = User::where('email', $credentials['email'])->limit(1)->get();
        
        if(!$checkUser) {
            return back()->withErrors('Credenciais inválidas.');
        }

        $user = User::find($checkUser[0]->id);
        $checkPassword = Hash::check($credentials['password'], $checkUser[0]->senha);

        if($checkPassword) {
            Auth::login($user);
            if ($user->tipo_usuario_id == 1) {
                return redirect()->to('cliente-logado');
            }
            if ($user->tipo_usuario_id == 2) {
                return redirect()->to('logado');
            }
        }

        else{
           return back()->withErrors('Credenciais inválidas.');
        }
    }

    public function cadastro(Request $request)
    {
        // Lógica para cadastrar o usuário no banco de dados

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
