<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
</head>
<body>
    <header>
        <h1>Portfolio</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/portfolio') }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Our Work</h2>
        <p>Check out our latest projects below:</p>
    </main>

    <footer>
        <p>&copy; 2023 Our Website</p>
    </footer>
</body>
</html>