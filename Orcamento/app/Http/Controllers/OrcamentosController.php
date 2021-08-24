<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamento;

class OrcamentosController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function consulta(){
        return view('orcamento.consulta');
    }
    public function store(Request $request){
        $orcamento = new Orcamento;
        $orcamento->ano = $request->ano;
        $orcamento->mes = $request->mes;
        $orcamento->dia = $request->dia;
        $orcamento->tipo = $request->tipo;
        $orcamento->descricao = $request->descricao;
        $orcamento->valor = $request->valor;

        $orcamento->save();
        return redirect('/')->with('msg','Orçamento salvo com sucesso!');
    }
}
