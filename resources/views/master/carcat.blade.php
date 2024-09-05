@include('master.home.first')



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
            {{-- <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li> --}}
            <li class="breadcrumb-item active text-primary">Our Cars</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Car List Start -->


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
                            <p class="mb-3">Price: ${{ number_format($car->pice) }}, Seats: {{ $car->seat }}, Color: {{ $car->color }}</p>
                            <a href="{{ route('car.details', $car->id) }}" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Car List End -->


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
