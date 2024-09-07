<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="" class="navbar-brand p-0">
            <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i>CarHub</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-auto py-0">
        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="{{ url('service') }}" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Service</a>
        <a href="{{ url('carcat') }}" class="nav-item nav-link {{ request()->is('carcat') ? 'active' : '' }}">Our Cars</a>
        <a href="{{ url('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </div>
</div>


            @if (Route::has('login'))
                @auth
                    @if(Auth::user()->role === 1)
                        <a href="{{ url('/dashboard') }}" class="btn btn-primary rounded-pill py-2 px-4">Dashboard</a>
                    @endif
                    <!-- Profile Button -->
                    <a href="{{ url('/userprofile') }}" class="btn btn-primary rounded-pill py-2 px-4">Profile</a>
                    
                    <a href="{{ route('logout') }}" class="btn btn-primary rounded-pill py-2 px-4 m-4 px-4" 
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 m-4 px-4">LogIn</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </nav>
</div>
