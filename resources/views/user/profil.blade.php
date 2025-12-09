<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Profil Saya - CinemaGo</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    <header class="navbar">
        <div class="navbar-left">
            <img src="asset/cinema.png" class="logo-img">
            <h2 class="cinemago"><span class="cinema">Cinema</span><span class="go">Go</span></h2>
        </div>
    </header>
    <div class="profile-container">
        <img src="asset/profil.png" alt="Foto Profil">
        <h2>Profil Saya</h2>
        <p><strong>Username: </p>
        <p><strong>Email: </p>
        <p><strong>Member Sejak: </p>
        <form action="{{ route('dashboard') }}">
            <button class="back-btn" type="submit">Kembali ke Dashboard</button>
        </form>
    </div>
    <footer>
        <div class="sosmed">
            <a href="#"><img src="asset/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="asset/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="asset/instagram.png" alt="Instagram"></a>
        </div>
        <p>&copy; 2025 CinemaGO</p>
    </footer>
</body>

</html>
