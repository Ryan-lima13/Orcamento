@extends('templates.main') 

@section('title','Editar');

@section('content')

<section id="formulario" class="mt-5"><!-- inicio formulário-->
    <form action="/orcamentos/update/{{$orcamento->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-2 ">
                    <select name="ano" id="ano" class="form-control">
                        <option value="">Ano</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="mes" id="mes" class="form-control">
                        <option value="">Mês</option>
                        <option value="janeiro">janeiro</option>
                        <option value="feverreiro">Fevereiro</option>
                        <option value="marco">Março</option>
                        <option value="abril">Abril</option>
                        <option value="maio">Maio</option>
                        <option value="junho">junho</option>
                        <option value="julho">Julho</option>
                        <option value="agosto">Agosto</option>
                        <option value="setembro">Setembro</option>
                        <option value="outubro">Outubro</option>
                        <option value="novembro">Novembro</option>
                        <option value="dezembro">Dezembro</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="text" name="dia" id="dia" class="form-control" placeholder="Dia">
                </div>
                <div class="col-md-6">
                    <select name="tipo" id="tipo" class="form-control">
                        <option value=" ">Tipo</option>
                        <option value="alimentação">Alimentação</option>
                        <option value="Educação">Educação</option>
                        <option value="Lazer"> Lazer</option>
                        <option value="Saúde">Saúde</option>
                    </select>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-8">
                    <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição">
                </div>
                <div class="col-md-2">
                    <input type="text" name="valor" id="valor" class="form-control" placeholder="valor">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-warning" type="submit" onclick="cadastrarDespesa()">
                        editar
                    </button>
                </div>
            </div>
        
        </div>
    </form>

</section><!-- fim formulario-->


    
@endsection