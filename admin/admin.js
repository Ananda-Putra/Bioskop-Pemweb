console.log("admin.js berhasil dimuat 🚀");

//tampil notifikasi
function showNotification(message, color = "#00c853") {
  const notif = document.getElementById("notification");
  if (!notif) return; // kalau elemen tidak ada, abaikan

  notif.textContent = message;
  notif.style.background = color;
  notif.classList.add("show");

  // Hilangkan otomatis setelah 3 detik
  setTimeout(() => {
    notif.classList.remove("show");
  }, 3000);
}

// manipulasi tabel
function setupDynamicTable(formSelector, tableBodySelector, fields) {
  const form = document.querySelector(formSelector);
  const tableBody = document.querySelector(tableBodySelector);

  if (!form || !tableBody) return; // aman kalau halaman tak punya tabel

  // Tambah data
  form.addEventListener("submit", (e) => {
    e.preventDefault();

    // Ambil nilai input sesuai placeholder
    const values = fields.map((field) =>
      form.querySelector(`[placeholder='${field}']`).value.trim()
    );

    // Buat baris baru
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>${tableBody.children.length + 1}</td>
      ${values.map((val) => `<td>${val}</td>`).join("")}
      <td>
        <button class="action-btn edit">Edit</button>
        <button class="action-btn delete">Hapus</button>
      </td>
    `;
    tableBody.appendChild(row);

    // Reset form dan tampilkan notifikasi
    form.reset();
    showNotification("✅ Data berhasil ditambahkan!");
  });

  // Hapus data
  tableBody.addEventListener("click", (e) => {
    if (e.target.classList.contains("delete")) {
      e.target.closest("tr").remove();
      showNotification("🗑️ Data berhasil dihapus!", "#ff4444");
    }
  });

  // Efek hover baris
  tableBody.addEventListener("mouseover", (e) => {
    const tr = e.target.closest("tr");
    if (tr) tr.style.backgroundColor = "#333";
  });
  tableBody.addEventListener("mouseout", (e) => {
    const tr = e.target.closest("tr");
    if (tr) tr.style.backgroundColor = "";
  });
}

//otomatis di tiap page
if (document.title.includes("Film")) {
  setupDynamicTable("form", "tbody", [
    "Judul Film",
    "Genre",
    "Durasi (menit)",
  ]);
}

if (document.title.includes("Makanan")) {
  setupDynamicTable("form", "tbody", [
    "Nama Item",
    "Jenis (Makanan / Minuman)",
    "Harga (Rp)",
  ]);
}
