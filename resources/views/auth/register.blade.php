<section class="text-center text-lg-start">
    <style>
        .cascading-right {
            margin-right: -50px;
        }

        @media (max-width: 991.98px) {
            .cascading-right {
                margin-right: 0;
            }
        }
    </style>

    <!-- Jumbotron -->
    <!-- <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form method="POST" action="{{ route('register') }}">
              @csrf -->

    <!-- First and Last Name Inputs -->
    <!-- <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example1">First name</label>
                    <input type="text" id="form3Example1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
               
              </div> -->

    <!-- Email input -->
    <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" id="form3Example3" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> -->

    <!-- Mobile input -->
    <!-- <div class="form-outline mb-4">
    <label class="form-label" for="form3Example4">Mobile</label>
    <input type="text" id="form3Example4" class="form-control" name="mobile" required>
</div> -->


    <!-- Password input -->
    <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example5">Password</label>
                <input type="password" id="form3Example5" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div> -->

    <!-- Confirm Password input -->
    <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example6">Confirm Password</label>
                <input type="password" id="form3Example6" class="form-control" name="password_confirmation" required>
              </div> -->

    <!-- Checkbox -->
    <!-- <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div> -->

    <!-- Submit button -->
    <!-- <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button> -->

    <!-- Already have an account? -->
    <!-- <div class="already-have-account">
                <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://i.brecorder.com/primary/2021/06/60d48302d4a99.jpg" class="w-100 rounded-4 shadow-4" alt="" />
      </div>
    </div>
  </div> -->
    <!-- Jumbotron -->
    <!-- </section>





 Jumbotron -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @include('master.home.first')
    @include('master.home.nav')
    <div class="container py-4">
        <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                    <div class="card-body p-5 shadow-5 text-center">
                        <h2 class="fw-bold mb-5">Sign up</h2>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label" for="form3Example1">Name</label>
                                        <input type="text" id="form3Example1" name="name" class="form-control" style="width: 100%;" />
                                    </div>
                                </div>
                            </div>

                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example3"> Enter Your Email</label>
                                <input type="email" id="form3Example3" name="email" class="form-control" style="width: 100%;" />
                            </div>

                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example3">Mobile</label>
                                <input type="text" id="form3Example3" name="mobile" class="form-control" style="width: 100%;" />
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-3">
                                <label class="form-label" for="form3Example4">Password</label>
                                <input type="password" id="form3Example4" name="password" class="form-control" style="width: 100%;" />
                            </div>

                            <!-- Checkbox -->
                          

                            <!-- Submit button -->
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">
                                Sign up
                            </button>
                            <div class="already-have-account">
                                <p>Already have an account? <a href="{{ route('login') }}">Log in</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0">
                <img src="https://i.brecorder.com/primary/2021/06/60d48302d4a99.jpg" class="w-100 rounded-4 shadow-4" alt="" />
            </div>
        </div>
       
    </div>
