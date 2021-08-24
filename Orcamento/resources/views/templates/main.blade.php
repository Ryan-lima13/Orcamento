<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>
<body>

    <header><!--inicio cabeçalho-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-warning ">
            <div class="container">

                <a href="/">
                    <img  cla class="navbar-brand" src="img/logo.png" alt="logo orçamento">
                </a>

                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="nav-principal">
                    <ul class="navbar-nav mr-auto ">
                        <li class="nav-item">
                            <a class="nav-link " href="/">Cadastro</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/consulta" target="_self">Consulta</a>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>
    </header> <!--fim cabeçaho-->
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                 @endif
            
            </div>
        </div>
    </main>
    @yield('content')
    
</body>
</html>