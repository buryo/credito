@extends('layouts.master')

@section('content')

    <div class="container-fluid width-50">
        <div class="card-header">{{ucfirst($medewerker->name)}}
            <div class="float-right"><a href="/organisaties/{{$medewerker->id_organisatie}}">Terug</a></div>
        </div>
        <div class="card-body">
            <form method="POST" action="/gebruikers/{{$medewerker->id}}">

                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="id_organisatie" class="col-md-4 col-form-label text-md-right">{{ __('Organisatie ID') }}</label>

                    <div class="col-md-6">
                        <input id="id_organisatie" type="text" class="form-control{{ $errors->has('id_organisatie') ? ' is-invalid' : '' }}" name="id_organisatie" value="{{ $medewerker->id_organisatie }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Naam') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $medewerker->name }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tussenvoegsel" class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel(s)') }}</label>

                    <div class="col-md-6">
                        <input id="tussenvoegsel" type="text" class="form-control" name="tussenvoegsel" value="{{ $medewerker->tussenvoegsel }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="achternaam" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                    <div class="col-md-6">
                        <input id="achternaam" type="text" class="form-control{{ $errors->has('achternaam') ? ' is-invalid' : '' }}" name="achternaam" value="{{ $medewerker->achternaam }}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ $medewerker->email }}" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Opslaan') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection