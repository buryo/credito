@extends('layouts.master')

@section('content')

    <div class="container-fluid width-50">
        <div class="card-header">Medewerker aanmaken voor {{ucfirst($organisatie->naam)}}
            <div class="float-right"><a href="/organisaties/{{$organisatie->naam}}">Terug</a></div>
        </div>
        <div class="card-body">
            <form method="POST" action="">

                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="id_organisatie" class="col-md-4 col-form-label text-md-right">{{ __('Organisatie Naam') }}</label>

                    <div class="col-md-6">
                        <input id="id_organisatie" type="text" class="form-control{{ $errors->has('id_organisatie') ? ' is-invalid' : '' }}" name="id_organisatie" value="{{$organisatie->naam}}" readonly required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Naam') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="" required autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tussenvoegsel" class="col-md-4 col-form-label text-md-right">{{ __('Tussenvoegsel(s)') }}</label>

                    <div class="col-md-6">
                        <input id="tussenvoegsel" type="text" class="form-control" name="tussenvoegsel" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="achternaam" class="col-md-4 col-form-label text-md-right">{{ __('Achternaam') }}</label>

                    <div class="col-md-6">
                        <input id="achternaam" type="text" class="form-control{{ $errors->has('achternaam') ? ' is-invalid' : '' }}" name="achternaam" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="" required>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Wachtwoord') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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