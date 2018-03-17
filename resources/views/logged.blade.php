@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logged in!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                @if (Auth::check())
                    {{header('Refresh:3 ; URL=/')}}
                @endif
                    Welcome {{ ucfirst(Auth::user()->name) }},
                    You will be redirected to the home page in 3 seconds!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
