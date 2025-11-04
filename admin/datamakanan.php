<?php

$makanan = [
  ["nama" => "Popcorn", "jenis" => "Makanan", "harga" => 20000],
  ["nama" => "Coca Cola", "jenis" => "Minuman", "harga" => 15000],
  ["nama" => "Hot Dog", "jenis" => "Makanan", "harga" => 25000],
];

if (isset($_POST['btn_tambah'])) {
  $nama = htmlspecialchars($_POST['nama']);
  $jenis = htmlspecialchars($_POST['jenis']);
  $harga = (int)$_POST['harga'];

  $makanan[] = ["nama" => $nama, "jenis" => $jenis, "harga" => $harga];

  echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
            showNotification('✅ Data berhasil ditambahkan!');
          });
        </script>";
}

echo "<h3>📋 Daftar Makanan & Minuman (Server-side PHP)</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr style='background:#333; color:white;'>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
      </tr>";

$no = 1;
foreach ($makanan as $item) {
  echo "<tr>
          <td>{$no}</td>
          <td>{$item['nama']}</td>
          <td>{$item['jenis']}</td>
          <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>
        </tr>";
  $no++;
}

echo "</table>";
?>
