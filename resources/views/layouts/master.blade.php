<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand" href="{{route('home')}}">LOGO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                        @if (Route::has('login'))                                       
                                            @auth
                                                <a href="{{ url('/home') }}" class="nav-link">home</a>
                                            @else
                                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                        
                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}">Register</a>
                                                @endif
                                            @endauth
                                        
                                    @endif <span class="sr-only">(current)</span></a>
                                </li>
                        </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
              </nav>

@yield('contenido')

</body> 
</html>