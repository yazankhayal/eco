<!doctype html>
<html lang="en">
<head>
    @include("layouts.css")
    @yield("css")
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Part 1
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('api_1')}}">API 1</a>
                        <a class="dropdown-item" href="{{route('api_2')}}">API 2</a>
                        <a class="dropdown-item" href="{{route('api_3')}}">API 3</a>
                        <a class="dropdown-item" href="{{route('api_4')}}">API 4</a>
                        <a class="dropdown-item" href="{{route('api_5')}}">API 5</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Part 2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('location')}}">Location</a>
                        <a class="dropdown-item" href="{{route('user')}}">User</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('part_3')}}">Part 3</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main role="main" class="main container">
    @include("layouts.msg")
    @yield("content")
</main><!-- /.container -->


@include("layouts.js")
@yield("js")

</body>
</html>
