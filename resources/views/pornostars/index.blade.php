@extends('layouts.app')

@section('content')
    <h2>
        PornoStar Preferite di Antonio Scimino
    </h2>
    <ul>
        @foreach ($pornoStars as $anto)
            @if ($anto->name === 'Prof. Kenya Gaylord I')
                <li>
                    <h2>{{ $anto->name }} </h2>
                </li>
            @else
                <li>
                    {{ $anto->name }}
                </li>
            @endif
        @endforeach
    </ul>
@endsection
