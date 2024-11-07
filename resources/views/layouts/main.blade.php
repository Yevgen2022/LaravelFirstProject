{{--<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<div>
    <div>
        <nav>
            <ul>
                <li><a href={{ route('main.index')}}>Main</a></li>
                <li><a href={{ route('post.index')}}>Posts</a></li>
                <li><a href={{ route('about.index')}}>About</a></li>
                <li><a href={{ route('contacts.index')}}>Contacts</a> </li>

            </ul>
        </nav>
    </div>

    @yield('content')

</div>
</body>
</html>--}}


<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Title Here</title>
    <!-- Підключення CSS Bootstrap -->
    <link href="{{ mix('css/bootstrap.css') }}" rel="stylesheet">
{{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
{{--            <div class="container-fluid">--}}

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Posts</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('about.index') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('contacts.index') }}">Contacts</a>
                        </li>

                    </ul>
{{--                </div>--}}
            </div>
        </nav>




        {{--<nav>
            <ul>
                <li><a href="{{ route('main.index') }}">Main</a></li>
                <li><a href="{{ route('post.index') }}">Posts</a></li>
                <li><a href="{{ route('about.index') }}">About</a></li>
                <li><a href="{{ route('contacts.index') }}">Contacts</a></li>
            </ul>
        </nav>--}}
    </div>

    @yield('content')

    <!-- Підключення JS Bootstrap -->
    <script src="{{ mix('js/bootstrap.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</div>
</body>
</html>

