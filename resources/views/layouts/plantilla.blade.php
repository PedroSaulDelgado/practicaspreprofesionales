<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Universidad Continental</h1>
        <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home')?'active' : ''}}" >Home</a></li>
                <li><a href="{{route('practicas.index')}}"  class="{{request()->routeIs('practicas.*')?'active' : ''}}">Practicas</a></li>
                <li><a href="{{route('nosotros')}}"  class="{{request()->routeIs('nosotros')?'active' : ''}}">Nosotros</a></li>
            </ul>
        </nav>
    </header>
    
    @yield('content')

    <style>
        .active {
            color:red;
            font-weight:bold;
        }
    </style>

</body>
</html>