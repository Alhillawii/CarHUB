<!-- @extends('layouts.app') -->

@section('content')
<div class="container py-4">
  <div class="row g-0 align-items-center">
    <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
        <div class="card-body p-5 shadow-5 text-center">
          <h2 class="fw-bold mb-5">Login</h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email input -->
            <div class="row mb-3">
              <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- Password input -->
            <div class="row mb-3">
              <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

              <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>

            <!-- Remember Me Checkbox -->
            <div class="row mb-3">
              <div class="col-md-6 offset-md-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
            </div>

            <!-- Submit button -->
            <div class="row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>
              </div>

              <!-- Forgot Password Link -->
              @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
              @endif
            </div>

            <!-- Sign up Link -->
            <div class="already-have-account">
              <p>Already have an account? <a href="{{ route('register') }}">Sign in</a></p>
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
@endsection

<!-- Section: Design Block -->
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


<!-- ///////////////////////////////////////////   register -->

 
<!-- //////////////////////////////// login nsreen  -->


  <!-- Jumbotron -->


