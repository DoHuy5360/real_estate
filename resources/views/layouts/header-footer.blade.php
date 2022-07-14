<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <link
        href='https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira'
        rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/projects.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/projects-view.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/cart.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/gallery-input-file.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/features/register-form.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/features/toast-message.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/features/user-information-form.css') }}" type="text/css">
    <title>@yield('title')</title>
</head>

<body>
    @include('dialog.user-information')
    @include('layouts.header')
    @yield('contents')
    @include('layouts.footer')
    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="{{ asset('assets/js/user-info-form.js') }}"></script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
