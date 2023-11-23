<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bali-Deskripsi</title>
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

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">
    
            <div class="d-flex justify-content-between align-items-center">
              <h2>Kuta Central Park Hotel</h2>
            </div>
            
            <p style="font-weight: 500; font-size: 20px; color: #b4b4b3;"><b>Bali</b>
            <svg xmlns="http://www.w3.org/2000/svg" width="7" height="7" viewBox="0 0 15 15" fill="none" flex-shrink= "0">
                <circle cx="7.5" cy="7.5" r="7.5" fill="black"/>
              </svg>
            Alamat lengkap</p>
            
          </div>
        </section><!-- End Breadcrumbs -->
    
        
        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-7">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/portfolio-1.jpg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                    </div>
    
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
              </div>
    
              <div class="col-lg-4">
                <div class="portfolio-description">
                  <p>
                    Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                  </p>
                  <button class="fasilitas"><i class="bi bi-water"></i></button>
                  <button class="fasilitas"><i class="bi bi-building-fill-lock"></i></button>
                  <button class="fasilitas"><i class="bi bi-cup-hot-fill"></i></button>
                </div>
              </div>

              

              <section id="katkota" class="d-flex flex-column justify-content-center align-items-center mb-0 pb-0">
                <div class="container text-md-left" data-aos="fade-up">
                <div class="section-title mb-0 pb-0">
                    <h2 class="mb-0 pb-2" style="font-size: 20px; font-weight: 300; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><b>Rp 1234567</b></h2>
                  </div>
                <a href="<?php echo base_url('pemesanan/add'); ?>" class="btn-kota rounded-0" style="width: 200px;">Pesan</a>
                
              </div>
            </section>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
      </main><!-- End #main -->
    
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
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

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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