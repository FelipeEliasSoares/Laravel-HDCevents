@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($events ?? []) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($events as $event)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{ $event->id }}" style="text-decoration: underline;">{{ $event->title }}</a></td>
                        <td>{{ $event->users->count() }}</td>
                        <td class="align-middle">
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                            <form action="/events/{{ $event->id }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            <a href="/events/create" class="btn btn-primary">Criar evento</a>
        </div>
    @else
        <p>Nenhum evento encontrado.</p>
        <a href="/events/create" class="btn btn-primary">Criar evento</a>
    @endif
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container mt-5">
    <h1>Eventos que estou participando</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-title-container">
    @if(count($eventsasparticipant) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($eventsasparticipant as $event)
                    <tr>
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td><a href="/events/{{ $event->id }}" style="text-decoration: underline;">{{ $event->title }}</a></td>
                        <td>{{ $event->users->count() }}</td>
                        <td>
                            <form action="/events/leave/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Sair do evento</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Você não está participando de nenhum evento. <a href="/">Veja todos os eventos</a></p>
    @endif
</div>

@endsection
