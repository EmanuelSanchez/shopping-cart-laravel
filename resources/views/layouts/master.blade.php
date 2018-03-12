<!DOCTYPE html>
<html lang="en">
<head>
    <script defer src="{{ URL::to('js/fontawesome-all.js') }}"></script>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{ URL::to('css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::to('css/app.css')}}">
    @yield('styles')
</head>
<body>
    @include('partials.header ')
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::to('js/jquery-1.12.3.min.js') }}"></script>
    <script src="{{ URL::to('js/bootstrap.min.js') }}"></script>
    @yield('scripts')

</body>
</html>
