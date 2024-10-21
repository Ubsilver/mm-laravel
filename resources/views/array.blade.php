<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>Array</title>
</head>

<body>
    <header>
        <img src="/images/logo.svg" alt="logo" width="100" height="100">
        <ul>
            <li><a href="{{ route('home') }}">Главная</a></li>
            <li><a href="{{ route('array') }}">Массивы</a></li>
        </ul>
    </header>
    <main>
        <div class="grid-container">
            @foreach ($array as $item)
            <div class="grid-item">
                <div class="card">
                    <img src="{{ $item['path'] }}" alt="{{ $item['title'] }}" class="card-image">
                    <div class="card-content">
                        <h3 class="card-title">{{ $item['title'] }}</h3>
                        <p class="card-price">{{ $item['price'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
    <footer>
        <p>
            &#169;
        </p>
    </footer>
</body>

</html>