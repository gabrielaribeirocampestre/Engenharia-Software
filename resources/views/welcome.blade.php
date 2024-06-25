<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Bem-vindo ao Suporte Emocional</h1>
        <p>Oferecemos recursos para ajudar você a cuidar da sua saúde emocional.</p>
        <p><a href="{{ url('/artigos') }}">Leia nossos artigos</a> ou <a href="{{ url('/chat') }}">converse com um especialista</a>.</p>
    </div>
@endsection
