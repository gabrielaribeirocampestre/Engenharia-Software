<!-- resources/views/chat.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Chat</h1>
        <p>Converse com um especialista em saúde emocional.</p>
        <form>
            <textarea placeholder="Digite sua mensagem"></textarea><br>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection
