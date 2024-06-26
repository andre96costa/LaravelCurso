<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store') }}" method="post">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="curso">Curso: </label>
        <input type="text" name="curso" value="{{ old('curso') }}">
        <br>

        <label for="carga">Carga: </label>
        <input type="text" name="carga" value="{{ old('carga') }}">
        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>