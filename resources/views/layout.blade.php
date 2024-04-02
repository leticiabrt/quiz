<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X_UA_Compatible" content="ie=edge">
    <title>Primeiro Exemplo</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <main role="main" class="py-4">
            @hasSection ('content')
                @yield('content')
            @endif
        </main>
    </div>
    <div class="container">
        <div class="card-footer">
            <p class="text-center py-4">Todos os diretios reservados a &copy;Letícia Brito</p>
        </div>
    </div>
</body>
</html>