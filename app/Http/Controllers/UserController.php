<?php
//testando código novo


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Servico;
use App\Models\Perfil;



class UserController extends Controller
{

    
    public function index()
    {
        return view('welcome');
    }

    public function create_cliente()
    {
        return view('cliente');
    }

    public function create_profissional()
    {
        $servicos = Servico::all();

        return view('profissional', ["servicos" => $servicos]);
    }

    public function store_profissional(Request $request)
    {
        // Dados do formulário
        $nome = $request->input('nome');
        $cnpj = $request->input('cnpj');
        $endereco = $request->input('endereco');
        $email = $request->input('email');
        $senha = $request->input('senha');
        $servicoId = $request->input('servico');

        // dd($request->all());

        // Criação do usuário
        $usuario = new User();
        $usuario->nome = $nome;
        $usuario->cnpj = $cnpj;
        $usuario->endereco = $endereco;
        $usuario->email = $email;
        $usuario->senha = bcrypt($senha);
        $usuario->tipo_usuario_id = 2; // Defina o ID correto para o tipo de usuário profissional
        $usuario->servico_id = $servicoId;
        $usuario->save();

        // Criação do perfil
        $perfil = new Perfil();
        $perfil->nome = $nome;
        // Defina outros campos do perfil, se houver
        $perfil->save();

        // Redireciona para a página de sucesso ou qualquer outra rota desejada
        return redirect()->route('welcome');
    }

    public function store_cliente(Request $request)
    {
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $endereco = $request->input('endereco');
        $sexo = $request->input('sexo');
        $senha = Hash::make($request->input('senha'));
        $email = $request->input('email');
        $user = new User();

        $user->nome = $nome;
        $user->cpf = $cpf;
        $user->endereco = $endereco;
        $user->sexo = $sexo;
        $user->senha = $senha;
        $user->tipo_usuario_id = 1;
        $user->email = $email;
        $user->save();

        return view('welcome');
    }
}
//fim teste

/*
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Servico;
use App\Models\Perfil;


class UserController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function create_cliente() {
        return view('cliente');
    }

    public function create_profissional() {
        $servicos = Servico::all();

        return view('profissional', ["servicos"=>$servicos]);
    }

    public function store_profissional(Request $request) {
        $nome = $request->input('nome');
        $cnpj = $request->input('cnpj');
        $endereco = $request->input('endereco');
        $senha = Hash::make($request->input('senha'));
        $email = $request->input('email');
       // $servico_id = $request->input('servico_id');
        $user = new User();

        $user->nome =  $nome;
        $user->cnpj =  $cnpj;
        $user->sexo =  'ss';
        $user->endereco =  $endereco;
        $user->senha =  $senha;
        $user->tipo_usuario_id = 2;
        $user->email = $email;
       // $user->servico_id = $servico_id;
        $user->save();
        return view('welcome');
    }


//testando novo código


//fim teste

    public function store_cliente(Request $request) {
        $nome = $request->input('nome');
        $cpf = $request->input('cpf');
        $endereco = $request->input('endereco');
        $sexo = $request->input('sexo');
        $senha = Hash::make($request->input('senha'));
        $email = $request->input('email');
        $user = new User();

        $user->nome =  $nome;
        $user->cpf =  $cpf;
        $user->endereco =  $endereco;
        $user->sexo =  $sexo;
        $user->senha =  $senha;
        $user->tipo_usuario_id = 1;
        $user->email = $email;
        $user->save();

        return view('welcome');
    }
}

*/
