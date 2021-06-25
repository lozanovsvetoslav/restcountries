<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rest Countries</title>
    <link href="/app.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item" >
                <a class="nav-link" aria-current="page" href="{{ route('countries_region') }}">Countries by Region</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('countries_count') }}">Countries in Region</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('region_population') }}">Population in Region</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('countries_languages') }}">Countries By Language</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('spoken_language') }}">Population Spoken Language</a>
            </li>
        </ul>
    </div>
    @yield('content')
    <script src="/app.js" type="text/javascript"></script>
</body>
</html>