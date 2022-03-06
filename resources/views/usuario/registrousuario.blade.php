@extends('layouts.master')


@section('conteudo')
    <form style="margin-top: 200px" method="POST"action="{{route('create.user')}}">
        @csrf
        <input name="nome" placeholder="nome" />
        <input name="email" placeholder="email" />
        <input name="password" placeholder="password" />
        <button type="submit">Enviar</button>

    </form>
@endsection
