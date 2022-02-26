@extends('layouts.main')

@section('title', 'Events World')

@section('content')

<div id="search-container" class="col-md-12">

<h1 class="titulo-welcome my-5">Busque um evento</h1>
<form action="/" method="GET"> 
    <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
</form>

</div>

<div id="events-container" class="container mt-5">
    @if ($search)
        <h2 class="text-center">Buscando por: {{ $search }}</h2>
    @else
        <h2 class="text-center">Próximos eventos</h2>
        <p style="color: #7c7c7c;">Nos próximos dias teremos:</p>
    @endif
    
    <div id="cards-container d-flex" class="row">
        @foreach ($events as $event)
            <div class="card col-md-4">
                <img class="img-card card-img-top" src="/storage/events/{{$event->image}}" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title fs-4">{{$event->title}}</h5>
                    @if (count($event->users) == 1)
                        <p class="card-participants">{{ count($event->users) }} Participante</p>
                    @elseif (count($event->users) == 0)
                        <p class="card-participants">Nenhum participante</p>
                    @else
                        <p class="card-participants"> {{ count($event->users) }} Participantes</p>
                    @endif
                    <a href="/events/{{ $event->id }}" class="btn">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if (count($events) == 0)
            <p style="color: #7c7c7c;" class="fs-6">Não há eventos no momento :(</p>
        @endif
    </div> 

</div>


@endsection