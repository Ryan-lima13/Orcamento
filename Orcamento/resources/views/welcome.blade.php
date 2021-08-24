@extends('templates.main')

@section('title','Orçamento Pessoal')

@section('content')

<section id="conteudo"><!--inicio conteudo-->
    <div class="row ">
        <div class="col ">
            
                <h1 class="display-4 text-center">Registro de Novas Despesa</h1>
            

        </div>

        

    </div>
</section><!--fim conteudo-->

<section id="formulario"><!-- inicio formulário-->
    <form action="/orcamentos" method="POST">
        @csrf
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
                        <option value="1">Alimentação</option>
                        <option value="2">Educação</option>
                        <option value="3"> Lazer</option>
                        <option value="4">Saúde</option>
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
                        <i class="fas fa-plus" id="btn"></i>
                    </button>
                </div>
            </div>
        
        </div>
    </form>

</section><!-- fim formulario-->
    
@endsection