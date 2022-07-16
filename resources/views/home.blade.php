@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')
<main>
    <ul>
        @foreach ($train as $trains)
            <li>{{$trains->azienda}}</li>
        @endforeach
    </ul>
</main>
@endsection