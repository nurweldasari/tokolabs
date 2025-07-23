<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Produk - TokoLabs</title>
  <link rel="stylesheet" href="{{ asset('assets/css/ubah_password.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
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
      <li><a href="schedule"><i class="fa-solid fa-calendar-days"></i> <span class="menu-text">Scheduler</span></a></li>
      <li><a href="etalase"><i class="fa-solid fa-user-gear"></i> <span class="menu-text">Manajemen & Etalase</span></a></li>
    </ul>
  </aside>

  <!-- Main Content -->
  <div class="main-content" id="mainContent">
    <div class="navbar">
      <div class="nav-title">Scrapping Produk</div>
      <div class="user-area">
        <div class="greeting">Hi, Welda!</div>
        <div class="avatar">
          <img src="/assets/img/profil.jpg" alt="Profil" />
        </div>
        <div class="dropdown">
          <div class="dropdown-toggle" onclick="toggleDropdown()">
            <i class="fa-solid fa-chevron-down chevron-icon"></i>
          </div>
          <div class="dropdown-menu" id="dropdownMenu">
            <a href="#">Ubah Kata Sandi</a>
            <a href="#" onclick="konfirmasiLogout()" class="logout-link">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- FORM -->
    <div class="profile-password-page">
  <div class="profile-section">
    <div class="profile-pic-container">
      <img src="/assets/img/profil.jpg" alt="Profile" class="profile-pic">
      <label for="file-upload" class="camera-icon">
        <i class="fas fa-camera"></i>
      </label>
      <input type="file" id="file-upload" hidden>
    </div>
    <p class="greeting">Hi, Welda!</p>
  </div>

  <div class="form-section">
    <h2>Ganti Password</h2>
    <form>
      <input type="password" placeholder="Password Lama" required>
      <input type="password" placeholder="Password Baru" required>
      <input type="password" placeholder="Konfirmasi Password Baru" required>
      <button type="submit">Simpan Password</button>
    </form>
  </div>
</div>
  <script>
    function previewProfile(event) {
      const reader = new FileReader();
      reader.onload = function () {
        document.getElementById('profilePreview').src = reader.result;
      };
      reader.readAsDataURL(event.target.files[0]);
    }
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
