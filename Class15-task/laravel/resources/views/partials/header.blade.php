<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Start Laravel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @if(Auth::check())
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login.show') }}">Admin</a>
                    </li>
                @elseif(!Auth::check() || !Auth::guard('admin')->check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.login.show') }}">User Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.register.show') }}">User Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.login.show') }}">Admin Login</a>
                    </li>
                @endif


                @if(Auth::guard('admin')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.login.show') }}">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.logout') }}">Logout</a>
                        </li>
                    @endif





            </ul>
        </div>
    </div>
</nav>
