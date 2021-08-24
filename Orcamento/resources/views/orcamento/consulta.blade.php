@extends('templates.main')

@section('title','Consultar')

@section('content')

<section id="conteudo2"><!--inicio conteudo -->
    <div class="container">
        <h1 class="display-4">Consulta de despesas</h1>

    </div>

</section><!--fim do conteudo-->

<section class="mt-5"><!--inicio tabela de consulta-->
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Tipo</th>
                            <th>Descrição</th>
                            <th>Valor</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</section><!--fim tabela consulta-->
    
@endsection
