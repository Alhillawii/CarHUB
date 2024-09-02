
<div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a href="" class="navbar-brand p-0">
                        <h1 class="display-6 text-primary"><i class="fas fa-car-alt me-3"></i></i>Car Hub</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>

<!-- //////////////////////////////////////////////////////////////////// -->


             

<!-- /////////////////////////////////////////// -->

                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Service</a>
                            <a href="blog.html" class="nav-item nav-link">Blog</a>
                            
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu m-0">
                                    <a href="feature.html" class="dropdown-item">Our Feature</a>
                                    <a href="cars.html" class="dropdown-item">Our Cars</a>
                                    <a href="team.html" class="dropdown-item">Our Team</a>
                                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                    <a href="404.html" class="dropdown-item">404 Page</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>





                        @if (Route::has('login'))
                        @auth
                        @if(Auth::user()->role === 1)
                <a href="{{ url('/dashboard') }}"
                   class="btn btn-primary rounded-pill py-2 px-4"
                >
                    Dashboard
                </a>
            @endif
            @else
                        
                    
                        <a href="{{ route('login') }}"  class="btn btn-primary rounded-pill py-2 px-4 m-4 px-4">LogIn</a>
                        @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="btn btn-primary rounded-pill py-2 px-4"
                >
                    Register
                </a>
            @endif
        @endauth
        @endif

<!-- ////////////////////////////////// تجربه -->

<!-- <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
     logout

</a> -->
<!-- 
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form> -->


<!-- ///////////////////////////// /////////////////////// -->


                    </div>
                </nav>
            </div>