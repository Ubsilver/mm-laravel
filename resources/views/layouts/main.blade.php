<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resouces/css/app.css','resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Нарушений.net</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>© 2024 Рейник Е И</p>
    </footer>
</body>
</html>