@extends('layouts.main')
@section('title', 'Produtos')

@section('content')
<h1>Tela de Produtos</h1>
<a href="/">Voltar para Home</a>
@if ($busca != '')
    <p>O usuário está buscando por: {{ $busca }}</p>
@endif
@endsection