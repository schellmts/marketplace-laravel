<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Painel Administrador</title>
</head>

<body>
    <h1>painel</h1>
    <p>tamo adm</p>
    <div>{{ Auth::user()->name }}</div>
    <a href="/profile">perfil</a>

    <div id="app">
        <example-component></example-component>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
