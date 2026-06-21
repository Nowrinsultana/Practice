<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Feature')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="feature-layout">
        <header>
            <h1>@yield('header', 'Feature Page')</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer>
            <p>Added some feature content here.</p>
        </footer>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
git