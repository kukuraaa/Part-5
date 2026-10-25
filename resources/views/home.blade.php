
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>GrandStay Booking</title>
</head>
<body>
    <nav>
        <h2>GrandStay</h2>

        <a href="/">Home</a>
        <a href="#">Hotel</a>
        <a href="#">Tentang Kami</a>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </nav>

    <h1>Selamat Datang di GrandStay Booking!</h1>
    <p>Temukan hotel terbaik untuk perjalananmu.</p>
</body>
</html>
