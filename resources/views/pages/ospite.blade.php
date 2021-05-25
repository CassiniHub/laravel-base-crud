@extends('layouts.main-layout')

@section('content')
    <h1>
        Ospite:
    </h1>

    <h2>Name: {{ $ospite -> name }}</h2>
    <h2>Lastname: {{ $ospite -> lastname }}</h2>
    <h2>Date of Birth: {{ $ospite -> date_of_birth }}</h2>
    <h2>Document Type: {{ $ospite -> document_type }}</h2>
    <h2>Document Number: {{ $ospite -> document_number }}</h2>
@endsection