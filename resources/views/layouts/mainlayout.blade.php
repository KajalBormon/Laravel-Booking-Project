<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Department- @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons/font/bootstrap-icons.css') }}">
</head>
<body>
    <header>
        <div class="images">
            <img src="{{ asset('images/jkkniu.png') }}" alt="" >
        </div>
        <nav>
            <div class="navBar">
                <ul>
                    <li>
                        <a href="{{ route('user.dashboard') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('showUsers') }}">All Info</a>
                    </li>
                    <li>
                        <a href="{{ route('user.pending') }}">Pending</a>
                    </li>
                    <li>
                        <a href="{{-- {{ route('show') }} --}}">Show</a>
                    </li>
                    <li>
                        <a href="">Sign Up</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>
