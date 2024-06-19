@extends('layouts.main')
@section('title', 'HDC Events')

@section('content')
        <h1>Algum Titulo</h1>
        <img src="/img/banner.jpg" alt="">
        @if (10 > 5)
            <p>Verdadeiro</p>
        @endif

        <p>{{ $nome }}</p>

        @if ($nome == 'João')
            <p>Nome é João e ele tem {{ $idade}} anos, e trabalha como {{ $trabalho}}</p>
        @else
            <p>Nome não é João</p>
        @endif

        @for ($i = 0; $i < 10; $i++)
            <p>{{ $arr[$i] }} - {{ $i }} </p>
            @if ($i == 5)
                <p>Meio do loop</p>
            @endif
        @endfor

        @foreach ($nomes as $nome)
            <p>{{ $nome }}</p>
        @endforeach

        {{-- Este é comentario do Blade --}}
@endsection