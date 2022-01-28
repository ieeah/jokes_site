@extends('layout.main_layout')

@section('content')
    <div class="container">

        <h1>Errore 404</h1>
        <h3>Questa pagina non esiste!</h3>

        <a href="{{route('home')}}">Torna alla homepage</a>
    </div>
@endsection