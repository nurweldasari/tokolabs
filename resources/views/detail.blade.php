<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Detail Produk - TokoLabs</title>
  <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
  <div class="container">
    <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
  <div class="menu-container">
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
      <li class="etalase active"><a href="#"><i class="fa-solid fa-cart-shopping"></i> <span class="menu-text">Rekomendasi Produk</span></a></li>
      <li><a href="schedule"><i class="fa-solid fa-calendar-days"></i> <span class="menu-text">Scheduler</span></a></li>
      <li><a href="akun"><i class="fa-solid fa-gear"></i> <span class="menu-text">Pengaturan Akun</span></a></li>
    </ul>
  </div>

  <div class="logout-wrapper">
    <a href="#" onclick="konfirmasiLogout()" class="logout-btn">
  <i class="fa-solid fa-right-from-bracket"></i>
  <span class="logout-text">Keluar</span>
</a>
  </div>
</aside>

  <!-- Main Content -->
  <div class="main-content" id="mainContent">
  <div class="navbar">
    <div class="nav-title">Rekomendasi Produk</div>

    <div class="user-area">
      <!-- Hi, Welda dan avatar saja -->
      <div class="greetingg">Hi, Welda!</div>
      <div class="avatar">
        <img src="/assets/img/profil.jpg" alt="Profil" />
      </div>
    </div>
  </div>

 <div class="detail-wrapper">
  <!-- Produk Utama -->
  <div class="produk-card">
    <img src="/assets/img/implora.png" alt="Produk" class="produk-img" />

    <div class="produk-info">
      <h3 class="produk-nama">
        [100% ORI]Glad2Glow Glowing Renew bundle all in 1 6in1–Brightening toner...
      </h3>

      <div class="live-badge">
        <span class="live-dot"></span> LIVE 5
      </div>

      <!-- Umur Produk -->
      <div class="umur-produk">
        <div class="umur-container">
          <div class="umur-icon">
            <i class="fa-regular fa-calendar"></i>
          </div>
          <div class="umur-content">
            <h4>Umur Produk</h4>
            <p>Diunggah ke toko: <span class="tanggal-upload">Jumat, 28 Februari 2025</span></p>
            <div class="umur-label">
              <i class="fa-regular fa-clock"></i> 5 Bulan
            </div>
          </div>
        </div>
      </div>
    </div> <!-- END .produk-info -->
  </div> <!-- END .produk-card -->

  <!-- Feedback -->
  <div class="feedback-section">
    <div class="feedback-header">
      <div class="left-header">
        <div class="icon-circle"><i class="fa-regular fa-circle-check"></i></i></div>
        <h4>Berdasarkan 5,2RB Penilaian terverifikasi</h4>
      </div>
      <span class="updated">Terakhir Diperbarui 6 Mei 2025</span>
    </div>

    <div class="feedback-columns">
      <!-- Positif -->
      <div class="positif">
        <h5><i class="fa-solid fa-check-circle"></i> Umpan Balik Positif (78%)</h5>
        <ul>
          <li><i class="fa-solid fa-check"></i> Kulit terasa lebih cerah setelah pemakaian rutin</li>
          <li><i class="fa-solid fa-check"></i> Tidak menyebabkan iritasi atau breakout</li>
          <li><i class="fa-solid fa-check"></i> Aromanya lembut dan menyegarkan</li>
          <li><i class="fa-solid fa-check"></i> Tekstur toner cepat menyerap di kulit</li>
        </ul>
      </div>

      <!-- Negatif -->
      <div class="negatif">
        <h5><i class="fa-solid fa-xmark-circle"></i> Umpan Balik Negatif (22%)</h5>
        <ul>
          <li><i class="fa-solid fa-xmark"></i> Belum ada efek mencerahkan setelah beberapa kali pemakaian</li>
          <li><i class="fa-solid fa-xmark"></i> Kulit terasa sedikit kering setelah dipakai</li>
          <li><i class="fa-solid fa-xmark"></i> Botol toner mudah bocor saat pengiriman</li>
          <li><i class="fa-solid fa-xmark"></i> Ukuran terlalu kecil untuk harga segitu</li>
        </ul>
      </div>
    </div>
  </div> <!-- END .feedback-section -->
</div> <!-- END .detail-wrapper -->

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
