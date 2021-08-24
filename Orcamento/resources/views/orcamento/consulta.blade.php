@extends('templates.main')

@section('title','Consultar')

@section('content')

<section id="conteudo2"><!--inicio conteudo -->
    <div class="container">
        <h1 class="display-4 text-center">Consulta de despesas</h1>

    </div>

</section><!--fim do conteudo-->

<section class="mt-5"><!--inicio tabela de consulta-->
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Ano</th>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                            <th>Editar</th>
                            <th>Apagar</th>
                        </tr>
                        
                    </thead>
                    @foreach ($orcamentos as $orcamento)
                    <tbody>
                     
                        <td>{{$orcamento->ano}}</td>
                        <td>{{$orcamento->tipo}}</td>
                        <td>{{$orcamento->descricao}}</td>
                         <td>{{$orcamento->valor}}</td>
                         <td><a href="/{{$orcamento->id}}" class="btn btn-light">
                             <i class="fas fa-edit fa-lg text-info"></i>
                             
                        </a></td>
                            
                        
                        
                        
                    </tbody>
                    @endforeach

                </table>

            </div>

        </div>

    </div>

</section><!--fim tabela consulta-->
    
@endsection
