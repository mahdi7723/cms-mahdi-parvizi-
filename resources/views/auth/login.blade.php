<head>
    <link rel="stylesheet" href="{{ asset('css\login') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
            class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form1Example13" name="email" :value="old('email')" required autofocus  class="form-control form-control-lg" />
              <label class="form-label" for="form1Example13"value="__('Email')">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form1Example23" class="form-control form-control-lg" name="password"
              required autocomplete="current-password" />
              <label class="form-label" for="form1Example23" :value="__('Password')">Password</label>
            </div>

            <div class="d-flex justify-content-around align-items-center mb-4">
              <!-- Checkbox -->
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="form1Example3" checked />
                <label class="form-check-label" for="form1Example3"> {{ __('Remember me') }} </label>
              </div>
              @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
          </form>
        </div>
      </div>
    </div>
  </section>
