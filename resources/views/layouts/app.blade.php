<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi')</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    @yield('head')
</head>
<body>
    @if (!View::hasSection('hideNavbar'))
        @include('Components.navbar')
    @endif

    <main class="py-4">
        @yield('content')
    </main>
    @include('Components.footer')

</body>
</html>

