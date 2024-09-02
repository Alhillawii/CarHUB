<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/cardeatil.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div id="carImageSlider" class="carousel slide mb-3" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://images.pexels.com/photos/2127039/pexels-photo-2127039.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Car Image" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="https://images.pexels.com/photos/2127040/pexels-photo-2127040.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Car Image" class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carImageSlider" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carImageSlider" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h3>Car Details</h3>
                    </div>
                    <div class="card-body">
                        <div id="rentalForm">
                            <div class="mb-3">
                                <label class="form-label">Car Model:</label>
                                <p class="car-name-display">{{ $brand->name }} {{ $car->name }}</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Car Details:</label>
                                <p class="car-desc-display">
                                    <strong>Engine:</strong> {{ $engine->type }}<br>
                                    <strong>Transmission:</strong> {{ $transmission->type }}<br>
                                    <strong>Seats:</strong> {{ $car->seat }}<br>
                                    <strong>Type:</strong> {{ $car->type }}
                                </p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model Year:</label>
                                <p class="model-year-display">{{ $car->year }}</p>
                            </div>
                            <form id="rentalForm" action="{{ route('car.reserve') }}" method="POST">
                                @csrf
                                <input type="hidden" name="car_id" value="{{ $car->id }}">
                                <div class="mb-3">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" name="start_date" required>
                                    <div id="startDateError" class="error-message"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="endDate" name="end_date" required>
                                    <div id="endDateError" class="error-message"></div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Total Price</label>
                                    <p class="price-display" id="price">$0.00</p>
                                </div>
                                <div id="successMessage" class="alert alert-success">Reservation Successful!</div>
                                <button type="submit" class="btn btn-primary w-100">Reserve Now</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="comments-section">
                    <h3>Comments</h3>
                    <div id="commentsList">
                        @foreach($reviews as $review)
    <div class="comment">
        <p class="comment-author">{{ $review->user->name ?? 'Anonymous' }}</p>
        <p class="rating-display">
            @for ($i = 0; $i < $review->rating; $i++)
                <span>&#9733;</span>
            @endfor
            @for ($i = $review->rating; $i < 5; $i++)
                <span>&#9734;</span>
            @endfor
        </p>
        <p class="comment-text">{{ $review->reviews }}</p>
    </div>
    @endforeach
                    </div>
                    <form id="commentForm" action="{{ route('car.addComment', $car->id) }}" method="POST" class="comment-form">
                        @csrf
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select id="rating" name="rating" class="form-select" required>
                                <option value="5">★★★★★</option>
                                <option value="4">★★★★☆</option>
                                <option value="3">★★★☆☆</option>
                                <option value="2">★★☆☆☆</option>
                                <option value="1">★☆☆☆☆</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="commentText" class="form-label">Your Comment</label>
                            <textarea class="form-control" id="commentText" name="review" rows="2" placeholder="Share your experience..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Add Comment</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const pricePerDay = {{ $car->pice }};
        document.getElementById('startDate').addEventListener('change', calculatePrice);
        document.getElementById('endDate').addEventListener('change', calculatePrice);
        function calculatePrice() {
            const startDate = document.getElementById('startDate').value;
            const endDate = document.getElementById('endDate').value;
            const startDateError = document.getElementById('startDateError');
            const endDateError = document.getElementById('endDateError');

            startDateError.textContent = '';
            endDateError.textContent = '';

            if (startDate && endDate) {
                const start = new Date(startDate);
                const end = new Date(endDate);
                const today = new Date();
                if (start < today || end < today) {
                    if (start < today) startDateError.textContent = 'Start date must be in the future.';
                    if (end < today) endDateError.textContent = 'End date must be in the future.';
                    return;
                }

                if (end < start) {
                    endDateError.textContent = 'End date must be after start date.';
                    return;
                }
                const days = Math.ceil((end - start) / (1000 * 60 * 60 * 24));
                const totalPrice = days * pricePerDay;

                document.getElementById('price').innerText = `$${totalPrice.toFixed(2)}`;
            }
        }
        document.getElementById('rentalForm').addEventListener('submit', function(event) {
             
            document.getElementById('successMessage').style.display = 'block';
            setTimeout(() => {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000);
        });
    </script>
</body>
</html>

{{-- @foreach ($images as $index => $image)
<div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
    <img src="{{ $image->path }}" alt="Car Image" class="d-block w-100">
</div>
@endforeach --}}