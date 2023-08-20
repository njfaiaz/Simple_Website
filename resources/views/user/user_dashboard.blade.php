<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Key</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/style.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/CSS/chat.css">
</head>

<body>

    @include('user.body.header')

    @yield('contant')

    @include('user.body.footer')





    @include('user.body.chat')

    <script src="{{ asset('frontend/assets') }}/JS/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b3b2e162b5.js"></script>
    <script src="{{ asset('frontend/assets') }}/JS/script.js"></script>
</body>

</html>
