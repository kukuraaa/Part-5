
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - GrandStay</title>
</head>
<body>
    <h2>Registrasi GrandStay</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/registrasi" method="POST">
        @csrf

        <div>
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <div>
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Registrasi</button>
    </form>
    <p>Sudah punya akun? <a href="/login">Login</a></p>
</body>
</html>
