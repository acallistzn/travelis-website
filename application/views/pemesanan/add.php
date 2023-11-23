<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelis - Pesan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon-32x32.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.css'); ?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="<?php echo base_url('travelis'); ?>"><img src="<?php echo base_url('assets/img/travelis.png'); ?>" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li class="dropdown"><a href="#" style="text-decoration: none"><span>Liburan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('travelis/katwisata'); ?>" style="text-decoration: none;">Wisata</a></li>
              <li><a href="<?= base_url('travelis/kathotel'); ?>" style="text-decoration: none;">Hotel</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('mahasiswa'); ?>" style="text-decoration: none">Tiket Saya</a></li>
          <li><a href="<?= base_url('travelis/reels'); ?>" style="text-decoration: none;">Reels</a></li>
          <li><a href="portfolio-details.html" style="text-decoration: none;"><i class="bi bi-person-fill" style="font-size: 20px;"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <section id="portfolio" class="portfolio">
    <div class="container"><br><br>
      <div class="row portfolio-container" style="margin-left: 20px; margin-right: 20px;">
    
        <div class="col-lg-4 col-md-6 portfolio-item" style="height: 400px; width: 300px; margin-right: 20px; box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.18); border-radius: 13px; ">
          <div class="portfolio-wrap" style="box-shadow: 0px 4px 14px rgba(0, 0, 0, 0);">


            <div class="portfolio-info" style="text-align: left; box-shadow: 0px 0px 0px;">
              <h4><a href="<?php echo base_url('travelis/detail'); ?>" style="text-decoration: none; font-size: 20px;">Pantai Bulukamba</a></h4>
              <p style="font-size: 17px; color: red;"><b>IDR 10.000</b></p>
              <hr>
              <p> desk tiket </p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item" style="height: 400px; width: 700px; box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.18); border-radius: 13px; ">
          <div class="portfolio-wrap" style="box-shadow: 0px 4px 14px rgba(0, 0, 0, 0);">

          <?php
                    //create form
                    $attributes = array('id' => 'FrmAddMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
            <div class="portfolio-info" style="text-align: left">
            <form action="<?php echo site_url('pemesanan/bayar'); ?>" method="post">
              <div class="mb-3">
                <label for="nama" class="form-label"><b>Nama Pemesan : </b></label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Example input placeholder" value=" <?= set_value('nama'); ?>">
              </div>

              <div class="mb-3">
                <label for="tanggal" class="form-label"><b>Tanggal : </b></label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Example input placeholder" value=" <?= set_value('tanggal'); ?>">
              </div>

              <div class="mb-3">
                <label for="jumlah" class="form-label"><b>jumlah : </b></label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="600" style="width: 15%;" placeholder="0" value=" <?= set_value('jumlah'); ?>">
              </div>

              <section id="katkota" class="d-flex flex-column" style="padding: 5px;">
                <div class="container" data-aos="fade-up">
                    <a href="<?php echo base_url('pemesanan/bayar'); ?>" class="btn-kota rounded-3" style="width: 120px; margin-left: 450px; margin-right: 5px;" type="submit" value="Save">Bayar</a>
                </div>
              </section>
            </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="color: #fff"><b>Travelis</b></h3>
            <p>
              <strong>Phone:</strong> +62 812 1667 3046<br>
              <strong>Email:</strong> travelis@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('travelis/index'); ?>" style="text-decoration: none;">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('travelis/katwisata'); ?>" style="text-decoration: none;">Wisata</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('travelis/kathotel'); ?>" style="text-decoration: none;">Hotel</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('travelis/reels'); ?>" style="text-decoration: none;">Reels</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url('mahasiswa'); ?>" style="text-decoration: none;">Pemesanan Tiket</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="text-decoration: none;">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="text-decoration: none;">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="text-decoration: none;">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="text-decoration: none;">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#" style="text-decoration: none;">Graphic Design</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright" style="color: #fff">
          &copy; Copyright <strong><span>Travelis</span></strong>. 2023
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#hero" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/vendor/purecounter/purecounter_vanilla.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/glightbox/js/glightbox.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/swiper/swiper-bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/waypoints/noframework.waypoints.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>

</html>