<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Credito</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">


</head>

<body>
<div class="card-body col-md-12">
    @include('layouts.navbar')
</div>

@yield('content')

<hr class="m-t-4">

<footer class="container-fluid">
    <p>Copyright © Credito-services 2018</p>
    <script src="{{ URL::asset('/js/custom.js') }}"></script>
</footer>
</body>
</html>
