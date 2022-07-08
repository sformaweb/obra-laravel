<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>App SOL @yield('title')</title>

    <meta name="csrf_token" content="{{ csrf_token() }}" />

    @include('layout.styles')

    {{-- <script>
        var BASE_URL = '{{ url("/") }}';
    </script> --}}

</head>
<body class="">

    <div class="wrapper">
        @include('layout.header')

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    @include('layout.footer')
    @include('layout.scripts')
</body>
</html>
