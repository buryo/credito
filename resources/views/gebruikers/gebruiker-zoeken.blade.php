@extends('layouts.master')

@section('content')
<div class="container-fluid width-50">
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
        <ul id="myUL">
         @foreach ($medewerkers as $medewerker)

                <li><a href="/gebruikers/{{$medewerker->id}}">{{ucfirst($medewerker->name)}} {{$medewerker->tussenvoegsel}} {{ucfirst($medewerker->achternaam)}}</a></li>
         @endforeach
         </ul>
</div>


@endsection