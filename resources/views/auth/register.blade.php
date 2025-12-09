<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/styleregister.css') }}">

</head>

<body>

    <header>
        <div class="cinemago">
            <span class="cinema">Cinema</span><span class="go">GO</span>
        </div>
        <div class="logo">
            <img src="asset/cinema.png" alt="CinemaGo">
        </div>
        <nav>
            <a href="index.html">Beranda</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <div class="form-container">
        <h2>Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="name" placeholder="Username" required>

            <label>Email</label>
            <input type="email" name="email" placeholder="Email" required>

            <div class="password-box">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="toggle" onclick="toggle(this, 'password')">👁️</span>
            </div>

            <div class="password-box">
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Konfirmasi Password"
                    required>
                <span class="toggle" onclick="toggle(this, 'confirm_password')">👁️</span>
            </div>
            <button type="submit">Daftar</button>
        </form>
    </div>

    <footer>
        <p>© 2025 CinemaGO</p>
    </footer>
    @include('user.layouts.script')
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
