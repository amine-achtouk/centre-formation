@extends('layouts.app')

@section('title', 'Filières')

@section('content')
    <h1>Liste de nos Filières</h1>
    <ul>
        @foreach($filieres as $filiere)
            <li>{{ $filiere['nom'] }}</li>
        @endforeach
    </ul>
@endsection