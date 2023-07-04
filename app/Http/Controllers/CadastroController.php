<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;


class CadastroController extends Controller
{
    public function meuMetodo()
{
    $url = URL::route('cadastro');
    // Faça o que precisar com a URL gerada...
    $url = URL::route('pesquisa-profissional');

    $url = URL::route('cliente');

    $url = URL::route('profissional');

    $url = URL::route('welcome');

    $url = URL::route('contato');

    $url = URL::route('login');

    $url = URL::route('servico-profissional');

    $url = URL::route('logado');
}

}
