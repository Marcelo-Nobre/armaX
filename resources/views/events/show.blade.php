@extends('layouts.main')

@section('title', $event->title)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->title }}">
      </div>
      <div id="info-container" class="col-md-6">
        <h1>{{ $event->title }}</h1>
        <p class="event-city"><ion-icon name="pin"></ion-icon> {{ $event->city }}</p>
        <p class="events-participants"><ion-icon name="people"></ion-icon> X Participantes</p>
        <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{$eventOwner['name']}}</p>
        <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
        <h3>O evento conta com:
          <ul id="items-list">
            @foreach($event->items as $item)
            <li><ion-icon name="logo-playstation"></ion-icon> <span>{{ $item }}</span> </li>
            @endforeach
          </ul>
        </h3>
      </div>
      <div class="col-md-12" id="description-container">
        <h3>Sobre o evento:</h3>
        <p class="event-description">{{ $event->description }}</p>
      </div>
    </div>
  </div>

@endsection