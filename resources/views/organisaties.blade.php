@extends('layouts.master')

@section('content')

    <div class="container-fluid width-50">
        <div class="card-header">Organisaties</div>
        <div class="card-body">
            @foreach($organisaties as $organisatie)
                <a href="/organisaties/{{$organisatie->naam}}" class="form-group links">{{$organisatie->naam}}</a>
                <hr>
                @endforeach
                </form>
        </div>
    </div>
@endsection