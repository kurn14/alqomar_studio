<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
</head>
<body>
    <header>
        <h1>About Us</h1>
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
        <h2>About Us</h2>
        <p>We are a team of dedicated professionals...</p>
    </main>

    <footer>
        <p>&copy; 2023 Our Website</p>
    </footer>
</body>
</html>