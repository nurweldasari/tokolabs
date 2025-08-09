<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Scheduler - TokoLabs</title>
  <link rel="stylesheet" href="{{ asset('assets/css/schedule.css') }}">
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
      <li><a href="etalase"><i class="fa-solid fa-cart-shopping"></i> <span class="menu-text">Rekomendasi Produk</span></a></li>
      <li class="schedule active"><a href="#"><i class="fa-solid fa-calendar-days"></i> <span class="menu-text">Scheduler</span></a></li>
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
    <div class="nav-title">Scheduler</div>

    <div class="user-area">
      <!-- Hi, Welda dan avatar saja -->
      <div class="greetingg">Hi, Welda!</div>
      <div class="avatar">
        <img src="/assets/img/profil.jpg" alt="Profil" />
      </div>
    </div>
  </div>

<div class="scheduler-wrapper">
  <!-- Upload File Baru -->
  <div class="card upload-card">
    <div class="card-header">
      <div class="icon-box">
        <img src="https://img.icons8.com/fluency/36/upload-to-cloud.png" alt="upload icon">
      </div>
      <div class="card-title">Upload File Baru</div>
    </div>

    <label class="label">Pilih Kategori</label>
    <select id="kategori" class="kategori-select">
      <option value="">--Pilih Kategori--</option>
    </select>

    <label class="label">Upload File CSV</label>
    <div class="drop-zone" id="drop-zone">
      <input type="file" id="fileInput" accept=".csv" hidden>
      <div class="drop-inner">
        <img class="cloud" src="https://img.icons8.com/ios/36/cloud-upload--v1.png" alt="cloud">
        <div class="drop-main">Drag & drop file CSV di sini</div>
        <div class="drop-sub">atau klik untuk memilih file</div>
        <button type="button" class="btn-pilih" id="btnPilih">Pilih File</button>
      </div>
    </div>

    <button class="btn-upload" id="btnUpload">Upload File CSV</button>
  </div>

  <!-- Riwayat Upload -->
  <div class="card riwayat-card">
    <div class="card-header">
      <div class="icon-box">
        <img src="https://img.icons8.com/fluency/36/clock.png" alt="clock icon">
      </div>
      <div class="card-title">Riwayat Upload</div>
      <div class="file-count" id="fileCount">0 file</div>
    </div>

    <div class="riwayat-empty" id="historyContent">
      <img src="https://img.icons8.com/ios/40/document--v1.png" alt="no file">
      <p>Belum ada file yang diupload</p>
      <small>Upload file CSV pertama Anda untuk melihat riwayat</small>
    </div>
  </div>
</div>


<script>document.getElementById('drop-zone').addEventListener('click', function() {
  alert('Fitur pilih file CSV');
});

document.getElementById('upload-btn').addEventListener('click', function() {
  alert('File CSV berhasil diupload!');
});
</script>