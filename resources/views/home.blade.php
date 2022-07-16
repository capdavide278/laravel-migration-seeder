@extends('templates.base')

@section('pageTitle', 'Trains')

@section('pageMain')
<main>
    <ul>
        @foreach ($train as $trains)
            <li>
                {{$trains->id}}, 
                {{$trains->azienda}}, 
                {{$trains->stazione_di_partenza}}, 
                {{$trains->stazione_di_arrivo}}, 
                {{$trains->orario_di_partenza}}, 
                {{$trains->orario_di_arrivo}}, 
                {{$trains->numero_carrozze}}, 
                {{$trains->in_orario}}
                {{$trains->cancellato}}
            </li>
        @endforeach
    </ul>
</main>
@endsection