<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/backend') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets/backend') }}/img/favicon.png">
    <title>
        JobPulse | @yield('title')
    </title>
    @include('backend.layouts.inc.style')
</head>

<body class="g-sidenav-show   bg-gray-100">
    {{-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript> --}}


    @yield('content')

    @include('backend.layouts.inc.script')
</body>

</html>
