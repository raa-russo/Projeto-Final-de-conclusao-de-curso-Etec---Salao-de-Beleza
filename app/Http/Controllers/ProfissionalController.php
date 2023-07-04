<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Profissional;




class ProfissionalController extends Controller
{
    public function index()
    {
        $profissionais = Profissional::all();
        return view('listar-profissionais', ['profissionais' => $profissionais]);
    } 
}
