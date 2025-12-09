<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pemesanan - CinemaGo</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <style>
        .order-container {
            width: 420px;
            margin: 70px auto;
            padding: 25px;
            background: #111;
            border: 1px solid #333;
            border-radius: 12px;
            text-align: center;
        }

        .order-container img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .order-container input,
        .order-container select {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            border-radius: 8px;
            border: 1px solid #444;
            background: #222;
            color: #fff;
        }

        .order-container button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: red;
            border: none;
            color: #fff;
            border-radius: 8px;
            cursor: pointer;
        }

        .order-container button:hover {
            background: darkred;
        }
    </style>
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
            <a href="dashboard.php">Home</a>
            <a href="pengaturan.php">Pengaturan</a>
            <a href="logout.php">Logout</a>
            <a href="history.php">History</a>
            <a href="profil.php" class="profile-icon"><img src="asset/profil.png"></a>
        </div>
    </header>

    <div class="order-container">



        <form action="{{ route('pesan.drink', $drink->id) }}" method="POST">
        <img src="{{ asset('storage' . '/' . $drink->image) }}" alt="Gambar Item">
        <h2 style="color:#ffcc00;">Pesan:></h2>
            @csrf
            @method('PUT')
            <label>Nama Pemesan</label>
            <input type="text" value="{{ $drink->name }}" name="name" required>

            <label>Jumlah</label>
            <input type="number" name="amount" min="1" required>

            <label>Metode Pembayaran</label>
            <select name="payment_mehtod" required>
                <option value="Dana">Dana</option>
                <option value="Gopay">Gopay</option>
                <option value="ShopeePay">ShopeePay</option>
                <option value="M-Banking">M-Banking</option>
            </select>

            <button type="submit">Pesan Sekarang</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 CinemaGO</p>
    </footer>

</body>

</html>
