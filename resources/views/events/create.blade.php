
@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="container-fluid col-md-6 offset-md-3">
    <div class="row">
        <div class="form-div">
            
            <h1>Crie o seu Evento</h1>
            <form action="/events" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="image"> <strong>Imagem do evento:</strong> </label>
                    <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                    <label for="title">Evento:</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Nome do evento ...">
                </div>
                <div class="form-group">
                    <label for="date">Data do Evento:</label>
                    <input type="date" class="form-control" name="date" id="date">
                </div>
                <div class="form-group">
                    <label for="city">Cidade:</label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Nome da cidade ...">
                </div>
                <div class="form-group">
                    <label for="private">Esse evento é privado:</label>
                    <select name="private" id="private" class="form-control">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Descrição do evento:</label>
                    <textarea name="description" id="description"
                    class="form-control" placeholder="O que vai ter nesse evento?"></textarea>
                </div>
                <div class="form-group">
                    <label for="items">Adicione itens de infraestrutura:</label>
                    <div class="form-group">
                        <input type="checkbox" name="items[]" id="items" value="Cadeiras"> Cadeiras <br> 
                        <input type="checkbox" name="items[]" id="items" value="Palco"> Palco 
                        <br>
                        <input type="checkbox" name="items[]" id="items" value="Bebida gratuita"> Bebida gratuita 
                        <br>
                        <input type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
                    </div>
                </div>
                <input type="submit" class="btn mt-2" value="Criar Evento">
            </form>
            
        </div>
    </div>
</div>

@endsection