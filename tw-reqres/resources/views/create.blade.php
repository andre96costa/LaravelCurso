<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if (session('ok'))
    <p>{{ session('ok') }}</p>
        
    @endif
    <form action="{{ route('clientes.store') }}?email='teste'&chave=123" method="POST" enctype="multipart/form-data">
        @csrf @method('POST')
        
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <br><br>

        <label for="idede">Idade:</label>
        <input type="text" name="idede" id="idede">

        <br><br>

        <label for="foto"></label>
        <input type="file" name="foto" id="foto">

        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>