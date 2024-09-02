@include('master.home.first')

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid topbar bg-secondary d-none d-xl-block w-100">
            <div class="container">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-6 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="tel:+01234567890" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                            <a href="mailto:example@gmail.com" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-3"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-light btn-sm-square rounded-circle me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

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


                    <div class="col-xl-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-secondary p-5 rounded">
                            <h4 class="text-primary mb-4">Send Your Message</h4>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-light w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                    
                   

                </div>
            </div>
        </div>
        <!-- Contact End -->

        <!-- Footer Start -->
       @include('master.home.foot')
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        @include('master.home.copyright')
        <!-- Copyright End -->


        <!-- Back to Top -->
       @include('master.home.top')   

        
    <!-- JavaScript Libraries -->
   @include('master.home.last')