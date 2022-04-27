<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="alternative-style-1">
<head>
@include('partials.metadata')
</head>
<body>

<div class="body">
    @include('partials.header')
    <div role="main" class="main">
        @yield('content')
    </div>
    @include('partials.footer')
</div>

@include('partials.scripts')

</body>
</html>