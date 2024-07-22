<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DSI - Company Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include 'header.php'; ?>

  <div class="container-fluid hero bg-primary text-white text-center py-5">
    <h1 class="display-4">Satu Aplikasi, Untuk Semua Kebutuhan Bisnis Anda</h1>
    <p class="lead">Kegiatan Perusahan lebih mudah dengan adanya ETIKAA.</p>
    <a href="#features" class="btn btn-danger">See All Features</a>
  </div>

  <div id="about" class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <img src="assets/turu.png" class="img-fluid" alt="About ETIKAA">
      </div>
      <div class="col-md-6">
        <h2>About Us</h2>
        <p>Duta Solusi Informatika adalah sebuah perusahaan yang menyediakan layanan jasa pembuatan Website dan Software Enghiner</p>
      </div>
    </div>
  </div>

  <div id="features" class="bg-light py-5">
    <div class="container text-center">
      <h2>Fitur</h2>
      <div class="row">
        <div class="col-md-3">
          <div class="card p-3 mb-3">
            <i class="fas fa-user-check fa-3x text-primary mb-3"></i>
            <h4>Absensi Online</h4>
            <p>Tanpa perlu lagi mencatat secara manual, aplikasi kami memberikan kemudahan presensi dengan satu sentuhan.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 mb-3">
            <i class="fas fa-shield-alt fa-3x text-primary mb-3"></i>
            <h4>Keamanan Data</h4>
            <p>Privasi dan keamanan data karyawan adalah prioritas utama kami.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 mb-3">
            <i class="fas fa-clock fa-3x text-primary mb-3"></i>
            <h4>Pemantauan Realtime</h4>
            <p>Pantau aktivitas karyawan secara langsung dengan laporan yang akurat.</p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card p-3 mb-3">
            <i class="fas fa-tasks fa-3x text-primary mb-3"></i>
            <h4>Manajemen Tugas</h4>
            <p>Atur tugas dengan mudah dan tetapkan tenggat waktu untuk memastikan target tercapai.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="container py-5">
    <div class="text-center">
      <h2>Kontak Kami</h2>
      <p>Jl. Menjangan Dalam No. 8, Palebon, Pedurungan, Kota Semarang</p>
      <p>Telp: 6281390660564 / 6287843034724</p>
      <p>Email: official@damarluhur.com</p>
    </div>
  </div>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="script.js"></script>
</body>
</html>