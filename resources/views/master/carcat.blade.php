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
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Cars</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Categories</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Car categories Start -->
        <div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Cental<span class="text-primary"> Blog & News</span></h1>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut amet nemo expedita asperiores commodi accusantium at cum harum, excepturi, quia tempora cupiditate! Adipisci facilis modi quisquam quia distinctio,
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">30 Dec 2025</div>
                        <div class="blog-comment my-3">
                            <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                            <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Rental Cars how to check driving fines?</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">25 Dec 2025</div>
                        <div class="blog-comment my-3">
                            <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                            <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Rental cost of sport and other cars</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="blog-content rounded-bottom p-4">
                        <div class="blog-date">27 Dec 2025</div>
                        <div class="blog-comment my-3">
                            <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">Martin.C</span></div>
                            <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">6 Comments</span></div>
                        </div>
                        <a href="#" class="h4 d-block mb-3">Document required for car rental</a>
                        <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit eligendi? Quibusdam, laudantium.</p>
                        <a href="#" class="">Read More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Car categories End -->

        

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