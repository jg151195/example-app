@extends('index-layout')

@section('content')

    <h1>Fazendas Cadastradas</h1>
    <ul>
        @foreach ($farms as $farm)
            <li>{{$farm->name}}
            <form action="/farm" method="post">
                <input type="hidden" name="id" value="{{$farm->id}}">
                @csrf
                @method('delete')
                <a href="/farm/{{$farm->id}}/edit">Edit</a>
                <button type="submit">Delete</button>

            </form></li>
        @endforeach
    </ul>

    <a href="/farm/create">Adicionar fazenda</a>

   

@endsection