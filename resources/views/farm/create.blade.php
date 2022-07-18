@extends('create-layout')

@section('content')
    <form action="/farm" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name">
        <button type="submit">Enviar</button>

    </form>
@endsection
