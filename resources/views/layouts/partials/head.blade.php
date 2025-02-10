<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <title>{{$settings->site_name}}  {{$settings->site_title_separator}} @yield('title')</title>
    <meta name="description" content="{{$settings->site_description}}" />
    <meta name="keywords" content="{{$settings->site_keywords}}" />
    <meta name="author" content="{{$settings->site_author}}" />

    <link rel="shortcut icon" href="{{asset('assets/image/trademark/favicon.webp')}}" type="image/x-icon" />
    <script type="module" src="{{asset('assets/script/script.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/style/style.css')}}">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.16.0/dist/sweetalert2.min.css
" rel="stylesheet">

    @stack('styles')


</head>
