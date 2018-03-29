@extends('layouts.master')

@section('content')
    <div class="container-fluid width-50">
        <div class="card-header">Gebruiker succesvol aangemaakt!
            <div class="float-right"><a href="/organisaties/{{$gebruiker->naam}}">Terug</a></div>
        </div>
        <div class="card-body">
            Beste {{ucfirst($gebruiker['name'])}}<br/>
            U heeft een account gekregen op credito-services.nl. Hierbij sturen wij u uw inloggegevens:<br/>
            Email: {{$gebruiker['email']}}<br/>
            Wachtwoord: {{$gebruiker['password']}}
        </div>
    </div>
    </div>



@endsection