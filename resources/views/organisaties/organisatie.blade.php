@extends('layouts.master')

@section('content')

    <div class="container-fluid width-50">
        <div class="card-header">{{ucfirst($organisatie[0])}} medewerkers
            <div class="float-right"><a href="/organisaties">Terug</a></div>
            <div class="float-right p-r-20"><a href="/organisaties/{{$organisatie[0]}}/medewerker-aanmaken">Medewerker
                    aanmaken</a></div>
            <div class="float-right p-r-40"><a href="/gebruiker-zoeken/{{$organisatie[0]}}">Zoeken medewerker</a></div>
        </div>
        <div class="card-body">
            <form method="post" action="/organisaties/{{$organisatie[0]}}">
                {{ csrf_field() }}
                @foreach($medewerkers as $medewerker)
                    <div class="">
                        <input type="checkbox" name="checkbox[]" value="{{$medewerker->id}}">
                        <a href="/gebruikers/{{$medewerker->id}}"
                           class="form-group links">{{ucfirst($medewerker['name'])}} {{$medewerker['tussenvoegsel']}} {{ucfirst($medewerker['achternaam'])}}</a>
                    </div>
                    <hr>
                @endforeach
                <div class="form-group row mb-0 float-right">
                    <div class="">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Verwijderen') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection