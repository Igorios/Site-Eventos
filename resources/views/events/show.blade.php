
@extends('layouts.main')

@section('title', 'Evento')

@section('content')

    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="mt-2 col-md-6">
                <img src="/storage/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{ $event->title }}</h1>
                <p class="event-city"> <ion-icon name="location-outline"></ion-icon> {{ $event->city }} </p>

                @if (count($event->users) < 2)
                    <p class="events-participants"> <ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} Participante</p>
                @else
                    <p class="events-participants"> <ion-icon name="people-outline"></ion-icon> {{ count($event->users) }} Participantes</p>
                @endif

                <p class="events-owner"> <ion-icon name="accessibility-outline"></ion-icon> {{ $eventOwner['name'] }} </p>

                @if (!$hasUserJoined)
                    <form action="/events/join/{{ $event->id }}" method="POST">
                    {{ csrf_field() }}
                        <a href="/events/join/{{ $event->id }}" class="btn" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">Confirmar Presença</a>
                    </form>
                @else 
                    <p class="alert-info already-join-msg">Você já está participando desse evento!</p>
                @endif

            </div>
            <div class="col-md-12 mt-3" id="c">
                <h3>Sobre o evento:</h3>
                <p class="event-description">{{ $event->description }}</p>
            </div>

            <h3 class="h3evento">O evento irá conter:</h3>
            <ul id="items-list">
            @foreach ($event->items as $item)
                <li> <ion-icon name="play-outline"></ion-icon> <span>{{ $item }}</span> </li>
            @endforeach
            </ul>
        </div>
    </div>


@endsection