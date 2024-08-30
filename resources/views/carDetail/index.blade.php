<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Details</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <style>
        /* CSS Variables for Theme Colors */
        :root {
            --primary-color: #ff4136;
            --secondary-color: #003366;
            --background-overlay: rgba(0, 0, 0, 0.6);
            --card-bg: rgba(255, 255, 255, 0.1);
            --text-color: #f8f9fa;
            --font-family: 'Roboto', sans-serif;
            --heading-font: 'Montserrat', sans-serif;
        }

        /* Reset and Base Styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background: url(https://www.hdcarwallpapers.com/walls/lamborghini_aventador_ultimae_roadster_4k-HD.jpg) no-repeat center center fixed;
            background-size: cover;
            color: var(--text-color);
            font-family: var(--font-family);
            position: relative;
        }

        /* Overlay for better readability */
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--background-overlay);
            z-index: -1;
        }

        .container {
            max-width: 1200px;
            margin-top: 2rem;
            padding: 1rem;
        }

        /* Card Styles */
        .card {
            background: var(--card-bg);
            border-radius: 1rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            border: none;
            color: #f8f9fa;
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            text-align: center;
        }

        .card-header h3 {
            font-family: var(--heading-font);
            font-size: 1.75rem;
            margin-bottom: 0.5rem;
        }

        .card-body {
            padding: 2rem;
        }

        /* Glowing Buttons */
        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .btn-primary::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 65, 54, 0.4) 10%, transparent 70%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff6347;
        }

        .btn-primary:hover::after {
            opacity: 1;
        }

        /* Form Styles */
        .form-label {
            font-weight: 700;
            font-family: var(--heading-font);
            color: #ffffff;
            margin-bottom: 0.5rem;
        }

        .price-display, .car-name-display, .car-desc-display, .model-year-display {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--primary-color);
        }

        .form-select, .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid #ffffff;
            border-radius: 0.5rem;
            color: #ffffff;
            font-size: 0.95rem;
        }

        .form-select:focus, .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            color: red;
            outline: none;
            box-shadow: 0 0 0 0.2rem var(--primary-color);
        }

        /* Carousel Styles */
        .carousel {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }

        .carousel-inner img {
            border-radius: 1rem;
            height: 400px;
            object-fit: cover;
        }

        /* Comments Section */
        .comments-section {
            background: var(--card-bg);
            border-radius: 1rem;
            padding: 1.5rem;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
            margin-top: 1.5rem;
        }

        .comments-section h3 {
            font-family: var(--heading-font);
            margin-bottom: 1rem;
            text-align: center;
        }

        #commentsList {
            max-height: 300px;
            overflow-y: auto;
            padding: 1rem;
            background: rgba(0, 51, 102, 0.8);
            border-radius: 0.75rem;
            margin-bottom: 1rem;
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) rgba(0, 51, 102, 0.8);
        }

        /* Custom Scrollbar for Firefox */
        #commentsList {
            scrollbar-width: thin;
            scrollbar-color: var(--primary-color) rgba(0, 51, 102, 0.8);
        }

        /* Custom Scrollbar for Webkit */
        #commentsList::-webkit-scrollbar {
            width: 10px;
        }

        #commentsList::-webkit-scrollbar-track {
            background: rgba(0, 51, 102, 0.8);
            border-radius: 10px;
        }

        #commentsList::-webkit-scrollbar-thumb {
            background: var(--primary-color);
            border-radius: 10px;
        }

        .comment {
            background: rgba(0, 51, 102, 0.9);
            padding: 1rem;
            border-radius: 0.5rem;
            margin-bottom: 0.75rem;
            position: relative;
            transition: transform 0.2s ease;
        }

        .comment:hover {
            transform: translateY(-5px);
        }

        .comment-author {
            font-weight: 700;
            color: var(--primary-color);
        }

        .rating-display {
            color: #ffd700;
            margin-top: 0.25rem;
            font-weight: 700;
        }

        .comment-text {
            margin-top: 0.5rem;
            font-size: 0.95rem;
        }

        .comment-form {
            background: rgba(0, 31, 63, 0.9);
            padding: 0.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }

        .comment-form textarea {
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid #ffffff;
            border-radius: 0.5rem;
            color: #ffffff;
            resize: none;
            font-size: 0.95rem;
            padding: 0.75rem;
        }

        .comment-form textarea:focus {
            background: rgba(255, 255, 255, 0.3);
            outline: none;
            box-shadow: 0 0 0 0.2rem var(--primary-color);
        }

        @media (max-width: 768px) {
            .carousel-inner img {
                height: 250px;
            }

            .card-body {
                padding: 1rem;
            }

            .comments-section {
                padding: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
              
                <div id="carImageSlider" class="carousel slide mb-3" data-bs-ride="carousel">
                    <!-- <div class="carousel-inner">
                        @foreach($images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ $image->path }}" class="d-block w-100" alt="Car Image {{ $index + 1 }}">
                            </div>
                        
                        @endforeach
                    </div> -->

                    <div class="carousel-inner">
   
                    <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/2127039/pexels-photo-2127039.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Car Image" class="d-block w-100">
         </div>
         <div class="carousel-item active">
        <img src="https://images.pexels.com/photos/365811/pexels-photo-365811.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Car Image" class="d-block w-100">
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
                        <form id="rentalForm">
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
                                    <strong>Seats:</strong> {{ $car->type }}
                                    
                                </p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Model Year:</label>
                                <p class="model-year-display">{{ $car->year }}</p>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date" class="form-control" id="endDate" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Total Price</label>
                                <p class="price-display" id="price">${{ number_format($car->pice, 2) }}</p>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Reserve Now</button>
                        </form>
                    </div>
                </div>

               
                <div class="comments-section">
                    <h3>Comments</h3>
                    <div id="commentsList">
                        @foreach($reviews as $review)
                            <div class="comment">
                                <p class="comment-author">Anonymous</p>
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
                            <label for="rating" class="form-label">Rating (1-5)</label>
                            <select id="rating" name="rating" class="form-select" required>
                                @for ($i = 1; $i <= 5; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
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
</body>
</html>
