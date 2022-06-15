@extends('layouts.main')

@section('title', 'LARAVEL')

@section('content')
<div>
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control">
        </form>
    </div>
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os dias dos próximos eventos</p>
    <div id="cards-container" class="row">
        @foreach ($events as $event)
            <div class="card col-md-3">
                <img src="/img/img.jpeg" alt="{{ $event->title }}">
                <div class="card-date">20/12/2022</div>
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-participants">X participantes</p>
                <a href="#" class="btn btn-primary">Saber Mais</a>
            </div>
        @endforeach
    </div>
</div>

@endsection
