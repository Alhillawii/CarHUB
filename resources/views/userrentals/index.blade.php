<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rented Cars</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/css/userrentals.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4" style="color: var(--secondary-color);">My Rented Cars</h1>
        <div class="form-group mb-4">
            <input type="text" class="form-control" id="searchInput" placeholder="Search by car model">
        </div>
        <div class="row" id="carsContainer">
            @forelse ($rentals as $car)
            @php
                $isPastDue = \Carbon\Carbon::parse($car->rental_end_date)->isPast();
                $isCancelled = $car->status === 'Cancelled';
            @endphp
            <div class="col-md-4 card-wrapper fade-in" data-car-model="{{ strtolower($car->car->name) }}">
                <div class="card {{ $isPastDue ? 'card-gray' : '' }}">
                    <div class="card-body">
                        <h5 class="card-title">{{$car->car->brand->name}} {{ $car->car->name }}</h5>
                        <p class="card-text"><strong>Start Date:</strong> {{ $car->rental_start_date }}</p>
                        <p class="card-text"><strong>End Date:</strong> {{ $car->rental_end_date }}</p>
                        <p class="card-text">
                            <strong>Status:</strong>
                            <span class="{{ $isCancelled ? 'status-canceled' : 'status-active' }}">
                                {{ $car->status }}
                            </span>
                        </p>
                        @unless($isCancelled)
                        <form action="{{ route('rentals.cancel', $car->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-primary btn-sm ml-2">Cancel</button>
                        </form>
                        @endunless
                    </div>
                </div>
            </div>
            @empty
            <p>No rentals found.</p>
            @endforelse
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="/js/search.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const fadeElements = document.querySelectorAll('.fade-in');
            fadeElements.forEach(element => {
                element.classList.add('visible');
            });

            const commentsSection = document.querySelector('.comments-section');
            if (commentsSection) {
                commentsSection.classList.add('show');
            }
        });
        document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card-wrapper');

    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();

        cards.forEach(card => {
            const carModel = card.getAttribute('data-car-model');
            if (carModel.includes(searchTerm)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    });
});
 </script>
</body>
</html>
