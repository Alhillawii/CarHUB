@include('master.home.first')

<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

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
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active text-primary">Our Cars</li>
        </ol>    
    </div>
</div>
<!-- Header End -->

<!-- Car List Start -->


<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h1 class="display-5 text-capitalize mb-3">Cental<span class="text-primary"> Cars </span></h1>
        </div>
        <div class="row g-4">
            @foreach($cars as $car)
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            
                            <img src="{{ asset($car->images->first()->path) }}" class="img-fluid rounded-top w-100" alt="{{ $car->name }}">
                           
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">{{ $car->year }}</div>
                            <div class="blog-comment my-3">
                                <div class="small"><span class="fa fa-user text-primary"></span><span class="ms-2">{{ $car->status }}</span></div>
                                <div class="small"><span class="fa fa-comment-alt text-primary"></span><span class="ms-2">{{ $car->type }}</span></div>
                            </div>
                            <a href="{{ route('car.details', $car->id) }}" class="h4 d-block mb-3">{{ $car->name }}</a>
                            <p class="mb-3">Price: {{ $car->pice }}, Seats: {{ $car->seat }}, Color: {{ $car->color }}</p>
                            <a href="{{ route('car.details', $car->id) }}" class="">Read More <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Car List End -->

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
