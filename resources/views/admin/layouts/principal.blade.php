<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Origin</title>
</head>
<body>

    {{-- Conteúdo principal --}}
    <div class="main">

        @yield('conteudo-principal')

        <section class="cards">

            @yield('cards')

        </section>

    </div>


</body>
</html>
