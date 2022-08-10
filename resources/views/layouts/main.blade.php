<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

<!--fonte do Google-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<!--css Bootstrap-->
<link rel = "stylesheet" href="https://stackpath.com/bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-Jckb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN)hop+VmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--css da aplicação-->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>
</head>

<body>
 <header>
     <nav class="navbar navbar-expand-lg navbar-ligth">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/hdcevents_logo.svg" alt="HDC Events">
            </a>
            <ul class="navbar-nav">
                <li class="nav item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav item">
                    <a href="/events/create" class="nav-link">Criar</a>
                </li>
                <li class="nav item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>
                <li class="nav item">
                    <a href="/" class="nav-link">Cadastrar</a>
                </li>
            </ul>
        </div>
     </nav>
 </header>
 
 
    <!--O yield serve para mudar as coisas dinamicamente, em : acima ele vai mudar de titulo de acordo com a página aberta, e abaixo ele muda o conteudo de acordo com a página.-->
   <main>
    <div class="container fluid">
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif 
            @yield('content')
        </div>
    </div>
   </main>

     <footer>
        <p>HDC Events &copy; 2022</p>
     </footer>
     <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>