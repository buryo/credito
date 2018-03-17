@extends('layouts.master')

@section('content')

    <div class="container-fluid width-50">
        <div class="card-header">{{ucfirst($organisatie[0])}} medewerkers
            <div class="float-right"><a href="/organisaties">Terug</a></div>
            <div class="float-right p-r-20"><a href="/organisaties/{{$organisatie[0]}}/medewerker-aanmaken">Medewerker aanmaken</a></div>
        </div>
        <div class="card-body">
            @foreach($medewerkers as $medewerker)
                <div class="">
                    <a href="/gebruikers/{{$medewerker->id}}" class="form-group links">{{ucfirst($medewerker['name'])}} {{$medewerker['tussenvoegsel']}} {{ucfirst($medewerker['achternaam'])}}</a>
                    {{--<a href="/gebruikers/{{$medewerker->id}}">{{ucfirst($medewerker['name'])}} {{$medewerker['tussenvoegsel']}} {{ucfirst($medewerker['achternaam'])}}</a>--}}
                </div>
                    <hr>
            @endforeach
        </div>
    </div>
@endsection