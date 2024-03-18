<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello World!</title>

    @include('backend.layouts.inc.style')
</head>

<body>
    @include('frontend.layouts.inc.navbar')

    @include('frontend.layouts.inc.header')
    @include('frontend.components.topcompanies')
    @include('frontend.components.applyjob')

    @include('frontend.components.footer')
    @include('backend.layouts.inc.script')
</body>

</html>
