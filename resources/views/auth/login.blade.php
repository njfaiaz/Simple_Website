
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Key</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/style.css">
</head>

<body>



    <section class="container my-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="d-flex flex-column align-items-center ">
                <a href="">
                    <img src="{{ asset('frontend/assets') }}//IMAGES/logo.png" alt="" class="top___logo">
                </a>
                <h1 class="text-center fw-bold mb-5 text-primary">Login </h1>

                <div class="col-11 col-lg-6">
                    <div class="mb-3">
                        <input type="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="name@example.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>



                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary text-black fw-bold border-0 w-100">
                        {{ __('Login') }}
                    </button>
                    <div class="d-flex justify-content-between my-3">
                        <a href="" class="text-decoration-none">Forgot password</a>
                        <a href="{{ route('register') }}" class="text-decoration-none">Create an Account</a>
                    </div>
                </div>


            </div>
        </form>
    </section>










    <script src="{{ asset('frontend/assets') }}/JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b2e162b5.js"></script>
    <script src="{{ asset('frontend/assets') }}/JS/script.js"></script>


    <script>

        function showPassword() {
            const password = document.getElementById("password");
            const showPasswordToggleEl = document.getElementById("showPasswordToggle");

            if (password.type === "password") {
                password.type = "text";
            } else {
                password.type = "password";
            }

            // Change the eye icon accordingly
            if (password.type === "password") {
                showPasswordToggleEl.innerHTML = `<i class="fa-solid fa-eye-slash"></i>`;
            } else {
                showPasswordToggleEl.innerHTML = `<i class="fa-solid fa-eye"></i>`;
            }
        }


    </script>
</body>

</html>











{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

