<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link
        href='https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira'
        rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.css"
        integrity="sha512-TZTUnuHs1njGko8PJqZlHzqZTZd880A+BvhR1jy1v4mWB4VFKVLG/eK9LYdDjxqNLmttSC1ygmqg6rkYjnEgaQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @php
        $css_names = [
            '/' => ['header', 'footer', 'home', 'projects', 'projects-view', 'cart', 'gallery-input-file', 'component'],
            'features/' => ['register-form', 'toast-message', 'user-information-form'],
        ];
    @endphp
    @foreach ($css_names as $location => $array_names)
        @foreach ($array_names as $name)
            <link rel="stylesheet" href="{{ asset("assets/css/{$location}{$name}.css") }}" type="text/css">
        @endforeach
    @endforeach
    <title>@yield('title')</title>
</head>

<body>
    @include('dialog.user-information')
    @include('layouts.header')
    @yield('contents')
    @include('layouts.footer')
    <script type="module" src="{{ asset('assets/js/header.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/home/home.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/cart.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/features/countries.js') }}"></script>
    <script type="module" src="{{ asset('assets/js/user-info-form.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.pkgd.js" integrity="sha512-IugMlI4mO8p/jg/cnoe/Duv6i6nkTHmiu8O4/Faqvt413HbCyacKTOBZZCutsGQStTUgd2vPbM3K3oiKSlSD9Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="module" src="{{ asset('assets/js/project/all-projects.js') }}"></script>
</body>

</html>
