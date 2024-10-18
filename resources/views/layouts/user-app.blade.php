<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', "{{ env('APP_NAME') }}")</title>
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="icon" type="svg" href="{{ asset('svg/logo-no-background.svg') }}">
    <link id="pagestyle" rel="stylesheet" href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/bootstrap/css/argon-dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/vendor/bootstrap/icon/font/bootstrap-icons.min.css') }}">
</head>

<body class="g-sidenav-show  bg-gray-100">
@yield('content')
<script src="{{ asset('asset/vendor/bootstrap/js/argon-dashboard.min.js') }}"></script>
</body>

</html>
