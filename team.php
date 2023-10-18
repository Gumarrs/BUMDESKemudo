<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Struktur Organisasi - BUMDesa Kemudo Makmur</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/apple-touch-icon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.10.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img src="assets/img/icon.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>

          <li class="dropdown active"><a href="profile.php"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profile.php">Visi Misi</a></li>
              <li><a href="team.php" class="active">Struktur Organisasi</a></li>
              <li><a href="testimonials.php">Penghargaan</a></li>
            </ul>
          </li>
          <li><a href="services.php">Jenis Usaha</a></li>
          <li><a href="blog.php">Artikel</a></li>

          <li><a href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->


    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Struktur Organisasi</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Struktur Organisasi</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team ">
      <div class="container">

        <div class="section-title">
          <h2>SUSUNAN PENGURUS TAHUN 2021-2026</h2>
        </div>

        <?php
        include "admin/helper/connection.php";
        $result = mysqli_query($connection, "SELECT * FROM struktur");
        ?>
        <div class="row">

          <?php
          while ($data = mysqli_fetch_array($result)) :
          ?>
            <div class="col-lg-4">

              <div class="member d-flex align-items-start">
                <div class="pic"><img src="admin/assets/img/organisasi<?= $data['image'] ?>" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <span><b><?= $data['jabatan'] ?></b></span>
                  <p><?= $data['nama'] ?></p>
                </div>



              </div>
            </div>
          <?php
          endwhile;
          ?>
        </div>

      </div>
    </section><!-- End Team Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Kontak</h3>
              <p>
                BUMDesa Kemudo Makmur<br>
                Kompleks Balai Desa Kemudo,<br>
                Prambanan, Klaten<br>
                <strong>Phone:</strong> <a href="tel:0857-2975-4670" class="text-white">0857-2975-4670</a><br>
                <strong>Email:</strong> <a href="mailto:bumdeskemudomakmur@gmail.com" class="text-white">bumdeskemudomakmur@gmail.com</a>
                <br>
              </p>

            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4></h4>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Media Sosial</h4>
            <div class="social-links mt-3">
              <a href="https://www.instagram.com/bumdes_kemudo_makmur/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://api.whatsapp.com/send?phone=6285729754670&" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="https://www.youtube.com/channel/UCpY2W_NJnLUadWOxVjxCSYA" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Anggik Rindi Antika</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>