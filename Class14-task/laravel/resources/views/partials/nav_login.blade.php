<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Start Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
{{--                <li class="nav-item active">--}}
{{--                    <a class="nav-link" href="{{ url('/') }}">Home--}}
{{--                        --}}{{--                        <span class="sr-only">(current)</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ url('/about') }}">About</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>--}}
{{--                </li>--}}
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.register.show')  }}">Register</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.login.show') }}">Login</a>
                                </li>
            </ul>
        </div>
    </div>
</nav>

