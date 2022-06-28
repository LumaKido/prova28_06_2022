<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }
            label{
                font-size: 20px;
            }
            button{
                font-size: 16px;
            }
        </style>
    </head>
    <body class="antialiased">
        <h1>Animais<h1>
            <form action="/editar-animais/{{ $animal-> id }}" method="POST">
                @csrf
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome" value="{{ $animal->nome }}">
                <br><br>
                <label for="lblIdade">Idade:</label>
                <input type="text" name="idade"  value="{{ $animal->idade }}">
                <br><br>
                <label for="lblTipo">Tipo:</label>
                <input type="text" name="tipo"  value="{{ $animal->tipo }}">
                <br><br>
                <button>Editar</button>
            </form>      
    </body>
</html>