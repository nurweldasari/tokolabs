<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Dashboard TokoLabs</title>
  <link rel="stylesheet" href="{{ asset('assets/css/schedule.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="logo">
      <div class="brand">
        <i class="fa-solid fa-shop"></i>
        <span class="brand-text">TokoLabs</span>
      </div>
      <div class="bars-wrapper" id="toggleSidebar">
        <i class="fa-solid fa-bars"></i>
      </div>
    </div>
     <ul>
      <li><a href="dashboard"><i class="fa-solid fa-gauge-high"></i> <span class="menu-text">Dashboard</span></a></li>
      <li><a href="produk"><i class="fa-solid fa-cart-shopping"></i> <span class="menu-text">Produk</span></a></li>
      <li class="schedule active"><a href="#"><i class="fa-solid fa-calendar-days"></i> <span class="menu-text">Scheduler</span></a></li>
      <li><a href="etalase"><i class="fa-solid fa-user-gear"></i> <span class="menu-text">Manajemen & Etalase</span></a></li>
    </ul>
  </aside>

  <!-- Main Content -->
<div class="main-content" id="mainContent">
  <div class="navbar">
    <div class="nav-title">Dashboard</div>

    <div class="user-area">

      <!-- Hi, Welda dan avatar -->
      <div class="greeting">Hi, Welda!</div>
      <div class="avatar">
        <img src="/assets/img/profil.jpg" alt="Profil" />
      </div>

      <!-- Dropdown -->
      <div class="dropdown">
        <div class="dropdown-toggle" onclick="toggleDropdown()">
          <i class="fa-solid fa-chevron-down chevron-icon"></i>
        </div>
        <div class="dropdown-menu" id="dropdownMenu">
          <a href="akun">
            <i class="fa-solid fa-gear"></i> Pengaturan Akun
          </a>
          <a href="#" onclick="konfirmasiLogout()" class="logout-link">
            <i class="fa-solid fa-right-from-bracket"></i> Logout
          </a>
        </div>
      </div>
    </div>
  </div>
<div class="schedule-wrapper">
  <!-- Box Jadwal -->
  <div class="schedule-box">
    <div class="icon-box purple">
      <i class="fa-solid fa-clock"></i>
    </div>
    <div class="schedule-content">
      <p class="label">Jadwal Scraping</p>
      <p class="time" id="jadwal-scraping">Setiap Hari Pukul 09:00</p>
    </div>
    <div class="edit-icon" onclick="openModal()">
      <i class="fa-solid fa-pen-to-square"></i>
    </div>
  </div>

  <!-- Box Terakhir Scraping -->
  <div class="schedule-box">
    <div class="icon-box green">
      <i class="fa-solid fa-rotate"></i>
    </div>
    <div class="schedule-content">
      <p class="label">Terakhir Scraping</p>
      <p class="time" id="last-scraping">Kamis, 24 Juli 2025 Pukul 11:00</p>
    </div>
  </div>

  <!-- Tombol Run Scraping -->
  <button id="run-btn" class="btn-run">
    <i class="fa-solid fa-play"></i> Run Scraping
  </button>
</div>

<!-- Modal -->
<div class="modal-overlay" id="modal-overlay">
  <div class="modal-box">
    <h3>Atur Jadwal Scraping</h3>
    <label for="input-jam">Waktu Scraping Harian</label>
    <input type="time" id="input-jam" value="09:00" />
    <div class="modal-buttons">
      <button onclick="closeModal()" class="btn-cancel">Batal</button>
      <button onclick="simpanJadwal()" class="btn-save">Simpan</button>
    </div>
  </div>
</div>
<script>
  const modal = document.getElementById('modal-overlay');
  const jadwalText = document.getElementById('jadwal-scraping');

  function openModal() {
    modal.style.display = 'flex';
  }

  function closeModal() {
    modal.style.display = 'none';
  }

  function simpanJadwal() {
    const jam = document.getElementById('input-jam').value;
    jadwalText.textContent = `Setiap Hari Pukul ${jam}`;
    closeModal();
  }

  document.getElementById('run-btn').addEventListener('click', function () {
  const btn = this;
  const lastScraping = document.getElementById('last-scraping');

  // Ubah tombol jadi loading
  btn.disabled = true;
  btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> Sedang Berjalan...`;

  // Ubah last scraping jadi status berjalan (warna hijau)
  lastScraping.innerHTML = `<span class="status-berjalan">Sedang Berjalan...</span>`;

  setTimeout(() => {
    const now = new Date();
    const hari = now.toLocaleDateString("id-ID", { weekday: "long" });
    const tanggal = now.toLocaleDateString("id-ID", { day: "numeric", month: "long", year: "numeric" });
    const jam = now.toLocaleTimeString("id-ID", { hour: "2-digit", minute: "2-digit" });

    lastScraping.textContent = `${hari}, ${tanggal} Pukul ${jam}`;
    btn.disabled = false;
    btn.innerHTML = `<i class="fa-solid fa-play"></i> Run Scraping`;
  }, 4000);
});
</script>
<script>
  // Toggle dropdown menu saat avatar diklik
  function toggleDropdown() {
    const menu = document.getElementById("dropdownMenu");
    if (menu) {
      menu.style.display = menu.style.display === "block" ? "none" : "block";
    }
  }

  // Konfirmasi logout
  function konfirmasiLogout() {
    const yakin = confirm("Apakah Anda yakin ingin logout?");
    if (yakin) {
      window.location.href = "/";
    }
  }

  // Sembunyikan dropdown jika klik di luar
  document.addEventListener("click", function (event) {
    const dropdown = document.querySelector(".dropdown");
    const menu = document.getElementById("dropdownMenu");
    if (dropdown && menu && !dropdown.contains(event.target)) {
      menu.style.display = "none";
    }
  });

  // Toggle sidebar jika tombol tersedia
  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const mainContent = document.getElementById("mainContent");
    const toggleBtn = document.getElementById("toggleSidebar");

    if (sidebar && mainContent && toggleBtn) {
      toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
        mainContent.classList.toggle("expanded");
      });
    }
  });
</script>
</body>
</html>
