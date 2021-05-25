@extends('layouts.main-layout')

@section('content')
    <h1>
        Compila i seguenti campi per creare un nuovo ospite:
    </h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        @method('POST')

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name">
        </div>
        <div>
            <label for="lastname">Lastname</label>
            <input id="lastname" type="text" name="lastname">
        </div>
        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input id="date_of_birth" type="text" name="date_of_birth">
        </div>
        <div>
            <label for="document_type">Document Type</label>
            <input id="document_type" type="text" name="document_type">
        </div>
        <div>
            <label for="document_number">Document Number</label>
            <input id="document_number" type="text" name="document_number">
        </div>

        <button type="submit">
            Aggiungi cliente
        </button>
    </form>
@endsection