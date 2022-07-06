<!DOCTYPE html>
<html lang="fe">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <i class="fas fa-bars"></i>
          </button>
          <a class="navbar-brand" href="#">Cms</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
            <form class="d-flex input-group w-auto">
                @if (Route::has('login'))
                    <div class="collapse navbar-collapse">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link active">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link active">Register</a>
                            @endif
                        @endauth
                    </div>
                 @endif
            </form>
          </div>
        </div>
      </nav>
      @yield('content')
</body>
</html>


