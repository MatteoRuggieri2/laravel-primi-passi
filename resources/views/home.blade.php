<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - laravel-primi-passi</title>
</head>
<body>

    <header>
        <span>HEADER</span>
        <ul>
            <li><a href="{{ route('about') }}">CHI SIAMO</a></li>
            <li><a href="{{ route('restaurants') }}">I NOSTRI RISTORANTI</a></li>
            <li><a href="{{ route('socials') }}">SOCIAL</a></li>
        </ul>
    </header>

    {{-- MAIN --}}
    <main>

        {{-- Title --}}
        <h1>{{ $homeTitle }}</h1>
        <h3>Lista dei ristoranti</h3>

        {{-- Restaurant list --}}
        <ul>
            @forelse ($restaurants as $restaurant)
                <li>
                    <span>{{ $restaurant }}</span>
                    <a href="https://www.google.it/" target="_blank">Vai al ristorante</a>
                </li>
            @empty
                <p>Non ci sono ristoranti</p>
            @endforelse
        </ul>
    </main>

</body>
</html>