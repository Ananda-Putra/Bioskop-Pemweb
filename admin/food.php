<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Management Makanan & Minuman - CinemaGo</title>
  <link rel="stylesheet" href="admin.css" />
</head>
<body>
  <header class="navbar">
    <h1>🍿 CinemaGo Admin Panel</h1>
  </header>

  <main>
    <section class="content">
      <!-- FORM PEMESANAN (PRAKTIKUM STYLE) -->
      <h2>Form Tambah Makanan / Minuman</h2>
      <form action="" method="POST">
        <input type="text" name="nama" placeholder="Nama Item" required>
        <input type="text" name="jenis" placeholder="Jenis (Makanan / Minuman)" required>
        <input type="number" name="harga" placeholder="Harga (Rp)" required>
        <button type="submit" name="btn_tambah">Tambah</button>
      </form>

      <hr>

      <!-- TAMPILAN PHP -->
      <?php include "datamakanan.php"; ?>

      <hr>

      <!-- TABEL CLIENT-SIDE (ADMIN.JS) -->
      <h2>Manajemen Client-side (JS)</h2>
      <form id="form-js">
        <input type="text" placeholder="Nama Item" required>
        <input type="text" placeholder="Jenis (Makanan / Minuman)" required>
        <input type="number" placeholder="Harga (Rp)" required>
        <button type="submit">Tambah via JS</button>
      </form>

      <table border="1" cellpadding="8">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- diisi JS -->
        </tbody>
      </table>
    </section>
  </main>

  <div id="notification"></div>
  <script src="admin.js"></script>
</body>
</html>
