@extends('layout.base')

@section('conteudo')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Url</th>
        </tr>
    </thead>    
    <tbody>
       @foreach ($repositorios as $rep)
        <tr>
            <th scope="row">{{ $rep['id'] }}</th>
            <td>{{ $rep['name'] }}</td>
            <td>{{ $rep['url'] }}</td>
        </tr>
       @endforeach
    </tbody>
</table>
@endsection