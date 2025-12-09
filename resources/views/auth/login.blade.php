<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaGo - Login</title>

    <link rel="stylesheet" href="{{ asset('css/styleregister.css') }}">
</head>

<body>

    {{-- @if (session('error'))
        <script>
            alert("{{ session('error') }}");
        </script>
    @endif --}}

    <header>
        <div class="cinemago">
            <span class="cinema">Cinema</span><span class="go">Go</span>
        </div>
        <div class="logo">
            <img src="{{ asset('asset/cinema.png') }}" alt="Logo Bioskop">
        </div>
        <nav>
            <a href="/">Home</a>
            <a href="{{ route('registerView') }}">Register</a>
        </nav>
    </header>

    <main>
        <div class="form-container">
            <h2>Form Login</h2>

            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <label for="email">email:</label>
                <input type="text" id="email" name="email" placeholder="Masukkan email" required>

                <div class="password-box">
                    <input type="password" id="password" name="password" placeholder="Masukkan Password" required>
                    <span class="toggle" onclick="toggle(this, 'password')">👁️</span>
                </div>

                <button type="submit">Login</button>
            </form>

            <p style="text-align:center; margin-top:10px;">
                Belum punya akun? <a href="{{ route('registerView') }}">Daftar di sini</a>
            </p>
        </div>
    </main>

    <footer>
        <p>Follow us:</p>

        <div class="social-icons">
            <a href="https://facebook.com" target="_blank">
                <img src="{{ asset('asset/facebook.png') }}" alt="Facebook">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="{{ asset('asset/instagram.png') }}" alt="Instagram">
            </a>
            <a href="https://twitter.com" target="_blank">
                <img src="{{ asset('asset/twitter.png') }}" alt="Twitter">
            </a>
        </div>

        <p>&copy; 2025 CinemaGo. All Rights Reserved.</p>
    </footer>

    @include('admin.layouts.script')
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
