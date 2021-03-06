@extends('layouts.main')

@section('title', 'Cadastrar Evento')

@section('content')

    <div class="create-constainer col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Nome do evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>

            <div class="form-group">
                <label for="title">Local do evento: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>

            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>

            <div class="form-group">
                <label for="title">Descrição do Evento:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
