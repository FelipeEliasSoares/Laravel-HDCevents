@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($events ?? []) > 0)
        <a href="/events/create" class="btn btn-primary">Criar evento</a>
    @else
        <p>Você ainda não tem eventos, <a href="/events/create">criar evento</a></p>
    @endif

</div>
@endsection
