@include('master.home.first')




<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-0 px-lg-4 py-2 py-lg-0">
    @include('master.home.nav')
</div>
<!-- Navbar & Hero End -->

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize text-primary mb-3">Contact Us</h1>
            <p class="mb-0">Welcome to <label style="color: #ea001e;">CarHub</label> where your journey begins.
                Whether you’re planning a weekend getaway, a business trip, or just need a reliable ride around town,
                we’ve got you covered with a wide selection of vehicles to suit your needs.
                Our team is here to help you find the perfect car and make your booking experience as smooth as possible. </a>.</p>
        </div>
        <div class="row g-5 d-flex justify-content-center text-center">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-5 d-flex justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-4">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-map-marker-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4>Address</h4>
                                <p class="mb-0">Jordan , Aqaba</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fas fa-envelope fa-2x"></i>
                            </div>
                            <div>
                                <h4>Mail Us</h4>
                                <p class="mb-0">Carhub24@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-add-item p-4">
                            <div class="contact-icon mb-4">
                                <i class="fa fa-phone-alt fa-2x"></i>
                            </div>
                            <div>
                                <h4>Telephone</h4>
                                <p class="mb-0">0797085792</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Contact Form Start -->
<div class="col-xl-12 wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 50px;"> <!-- Add bottom margin here -->
    <div class="bg-secondary p-5 rounded">
        <h4 class="text-primary mb-4">Send Your Message</h4>
        <form action="{{ route('contact.store') }}" method="POST">
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            <script>
                // Set a timeout to hide the success message after 1 minute (60000 milliseconds)
                setTimeout(function() {
                    var message = document.getElementById('success-message');
                    if (message) {
                        message.style.display = 'none';
                    }
                }, 60000); // 60000 milliseconds = 1 minute
            </script>
            @endif
            <br>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @csrf
            <div class="row g-4">
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}">
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                        <label for="subject">Subject</label>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 160px">{{ old('message') }}</textarea>
                        <label for="message">Message</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-light w-100 py-3" type="submit">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact Form End -->

<!-- Footer Start -->

<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s" >
            <div class="container py-5">
                <div class="row g-5 justify-content-center">

                    <div class="col-md-6 col-lg-6 col-xl-3" >
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Cars</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Business Hours</h4>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Mon - Friday:</h6>
                                <p class="text-white mb-0">09.00 am to 07.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Saturday:</h6>
                                <p class="text-white mb-0">10.00 am to 05.00 pm</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="text-muted mb-0">Vacation:</h6>
                                <p class="text-white mb-0">All Sunday is our vacation</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="#"><i class="fa fa-map-marker-alt me-2"></i>Jordan , Aqaba</a>
                            <a href="mailto:info@example.com"><i class="fas fa-envelope me-2"></i> Carhub24@gmail.com</a>
                            <a href="tel:+012 345 67890"><i class="fas fa-phone me-2"></i>0797085792</a>
                            <a href="tel:+012 345 67890" class="mb-3"><i class="fas fa-print me-2"></i>0775453200</a>
                            <div class="d-flex">
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Footer End -->
@include('master.home.copyright')


<!-- Back to Top -->
@include('master.home.top')


<!-- JavaScript Libraries -->
@include('master.home.last')
