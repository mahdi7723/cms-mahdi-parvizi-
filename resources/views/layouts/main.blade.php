<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title_tag ?? 'عبارات پیش فرض' }}</title>

        <!-- Styles -->
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="{{mix('css/app.css')}}"
        <link rel="stylesheet" href="{{mix('css/post.css')}}"

        <!-- Scripts -->
        <script src="{{mix('js/app.js')}}" defer></script>
        <!-- JavaScript Bundle with Popper -->

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen ">

            <!-- Page Heading -->
            <header class="text-white">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <a class="text-white" type="button" href="{{route('posts')}}">پست ها</a>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>
