@extends('layouts.main-layout')

@section('content')
    <h1>
        Elenco ospiti:
    </h1>

    <ul>
        @foreach ($ospiti as $ospite)
            <li>
                <a href="{{ route('ospite', $ospite -> id) }}">
                    {{ $ospite -> name }}
                    {{ $ospite -> lastname }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('createOspite') }}">
        Crea nuovo ospite
    </a>
@endsection