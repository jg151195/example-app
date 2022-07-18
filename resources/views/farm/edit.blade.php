@extends('create-layout')

@section('content')
    <form action="/farm" method="POST">
        @csrf
        @method('put')

        <input type="hidden" name="id" value="{{$id}}">
        <label for="name">Nome:</label>
        <input type="text" name="name" value="{{$farm->name}}">
        <button type="submit">Enviar</button>

    </form>
@endsection
