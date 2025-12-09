<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinemaGo - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <img src="asset/cinema.png" class="logo-img">
            <h2 class="cinemago">
                <span class="cinema">Cinema</span><span class="go">Go</span>
            </h2>
        </div>
        <div class="navbar-right">
            <a href="{{ route('film') }}">Film</a>
            <a href="{{ route('food') }}">Makanan</a>
            <a href="{{ route('drink') }}">Minuman</a>
        </div>
    </header>

    @yield('content')
    <footer>
        <div class="sosmed">
            <a href="#"><img src="asset/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="asset/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="asset/instagram.png" alt="Instagram"></a>
        </div>
        <p>&copy; 2025 CinemaGo. All Rights Reserved.</p>
    </footer>
    @include('admin.layouts.script')
</body>

</html>
