<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrcamentosController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function consulta(){
        return view('orcamento.consulta');
    }
}
