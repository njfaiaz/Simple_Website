
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Key</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}//CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}//CSS/style.css">
</head>

<body>

    <section class="container my-5">
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="d-flex flex-column align-items-center ">

                <a href="">
                    <img src="{{ asset('frontend/assets') }}//IMAGES/logo.png" alt="" class="top___logo">
                </a>
                <h1 class="text-center fw-bold mb-5 text-primary">Create New Account </h1>

                <div class="col-11 col-lg-6">

                    <div class="form-floating mb-3">
                        <input type="text" id="name" class="form-control" placeholder="Enter your full name" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Enter your full name</label>
                    </div>



                    <div class="form-floating mb-3">
                        <input type="text" id="visa_no" class="form-control" placeholder="Q id number" @error('visa_no') is-invalid @enderror" name="visa_no" value="{{ old('visa_no') }}" required autocomplete="visa_no" autofocus>
                        @error('visa_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Q id number (Enter 11 Digit)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" id="visa_exp_date" class="form-control" placeholder="Q id number" @error('visa_exp_date') is-invalid @enderror" name="visa_exp_date" value="{{ old('visa_exp_date') }}" required autocomplete="visa_exp_date" autofocus>
                        @error('visa_exp_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Q id number (Enter 11 Digit)</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" id="email" class="form-control" placeholder="Enter your full name" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <label>Enter your Email</label>
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password"@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password_confirmation" id="password-confirm" placeholder="Confirm Password">

                    </div>

                    <button type="submit" class="btn btn-primary text-black fw-bold border-0 w-100">Registration</button>
                    <div class="my-3 text-center">
                        <span>Allreay Member ?</span>
                        <a href="./Login.html" class="text-decoration-none">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <script src="{{ asset('frontend/assets') }}//JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b2e162b5.js"></script>
    <script src="{{ asset('frontend/assets') }}//JS/script.js"></script>


</body>

</html>
