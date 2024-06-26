@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
<div id="search-container" class="col-md-12 ">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control mx-auto" placeholder="Procurar..." style="max-width: 600px;">
    </form>
</div>

<div id="events-container" class="col-md-12 my-4">
    <h2 class="text-center">Próximos Eventos</h2>
    <p class="subtitle text-center"> Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row justify-content-center">
        @foreach($events as $event)
        <div class="card col-md-4">
            <img src="/img/events/{{ $event-> image }}" alt="{{ $event->title }}">
            <div class="card-body">
                <p class="card-date">{{ date('d/m/y' , strtotime($event->date)) }}</p>
                <h5 class="card-title"> {{ $event->title }} </h5>
                <p class="card-participants"> X Participantes </p>
                <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0)
            <p class="text-center b">Não há eventos disponíveis</p>
        @endif
    </div>
</div>





@endsection