<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelis - Beranda</title>
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
           <li><a href="<?= base_url('pemesanan'); ?>" style="text-decoration: none">Tiket Saya</a></li>
          <li><a href="<?= base_url('travelis/reels'); ?>" style="text-decoration: none;">Reels</a></li>
          <li><a href="portfolio-details.html" style="text-decoration: none;"><i class="bi bi-person-fill" style="font-size: 20px;"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-md-left" data-aos="fade-up">
      <h1 style="font-size: 40px;">Ciptakan Momen Tak Terlupakan dari Sini</h1>
      <h2 style="margin-bottom: 3px;">Yuk, cari aktivitas dan destinasi! </h2>
      <div class="topnav">
        <div class="search-container">
          <form action="<?php echo base_url('travelis/katwisata'); ?>">
            <input type="text" placeholder="  Cari Tempat Wisata.." name="search">
            <button type="submit" style="margin-left: 5px;"><i class="bi bi-search" style="color: #fff;"></i></button>
          </form>
        </div>
      </div>
      <a href="#what-we-do" class="btn-get-started scrollto rounded-5" style="width: 120px; text-align: center; text-decoration: none; font-size: 15px;">Mulai</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= What We Do Section ======= -->
    <section id="what-we-do" class="what-we-do mb-0 pb-0">
      <div class="container">
        <div class="section-title mb-0 pb-0">
          <h2>Saatnya Berpetualang!</h2>
        </div>
      </div>
    </section>

    <section id="team" class="team mt-0 pt-0">
      <div class="container">
      <div class="wrapper">
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex text-center align-items-stretch">
            <div class="member text-center">
              <a href="<?php echo base_url('travelis/pantai'); ?>"><img src="assets/img/kategoritempat/bingin1.jpeg" alt="" class="rounded-0"></a>
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Pantai</a></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <a href="<?php echo base_url('travelis/pantai'); ?>"></a><img src="assets/img/kategoritempat/bromo.jpg" alt="" class="rounded-0">
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Pegunungan</a></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <a href="<?php echo base_url('travelis/pantai'); ?>"></a><img src="assets/img/kategoritempat/Air Terjun Burung Walet2.jpg" alt="" class="rounded-0">
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Air Terjun</a></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <a href="<?php echo base_url('travelis/pantai'); ?>"></a><img src="assets/img/kategoritempat/waterboom dreamland.jpeg" alt="" class="rounded-0">
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Kolam Renang</a></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <a href="<?php echo base_url('travelis/pantai'); ?>"></a><img src="assets/img/kategoritempat/bali zoo1.jpeg" alt="" class="rounded-0">
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Kebun Binatang</a></h4>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
            <a href="<?php echo base_url('travelis/pantai'); ?>"></a><img src="assets/img/kategoritempat/borobudur2.jpg" alt="" class="rounded-0">
              <h4><a href="<?php echo base_url('travelis/pantai'); ?>" style="color: black; text-decoration: none;">Bersejarah</a></h4>
            </div>
          </div>
        </div>
</div>
      </div></section>

      <section id="katkota" class="d-flex flex-column justify-content-center align-items-center mb-0 pb-0">
      <div class="container text-md-left" data-aos="fade-up">
      <div class="section-title mb-0 pb-0">
          <h2>Jelajahi beragam destinasi wisata di berbagai kota.</h2>
        </div>

      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">malang</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">bali</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Surabaya</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Lombok</a><br><br>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Manado</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Makassar</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Batam</a>
      <a href="<?= base_url('travelis/bali_w'); ?>" class="btn-kota rounded-5">Padang</a>
    </div>
  </section><!-- End Hero -->

   
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Rekomendasi Akomodasi</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters" style="font-family: 'poppins';">
             
              <li data-filter=".filter-bali"  class="filter-active">bali</li> 
              <li data-filter=".filter-batam">Batam</li>
              <li data-filter=".filter-lombok">Lombok</li>
              <li data-filter=".filter-bogor">Bogor</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Kuta Central Park Hotel2.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left;">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Kuta Central Park Hotel</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Golden Tulip Essential denpasar.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Golden Tulip Essential Denpa ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/The Crystal Luxury Bay Resort Nusa Dua.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">The Crystal Luxury Bay Resor ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/The One Legian.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">The One Legian</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/The Apurva Kempinski Bali.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">The Apurva Kempinski Bali</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bali wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Sense Sunset Seminyak.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Sense Sunset Seminyak</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Harris Resort Barelang Batam.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Harris Resort Barelang Batam</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Turi Beach Resort Batam.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Turi Beach Resort Batam</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Batam Marriott Hotel Harbour Bay.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Batam Marriott Hotel Harbour ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Montigo Resorts Nongsa.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Montigo Resorts Nongsa</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/da Vienna Boutique Hotel.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">da Vienna Boutique Hotel</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 portfolio-item filter-batam wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src=" assets/img/filter-hotel/Pacific Palace Hotel Batam.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Pacific Palace Hotel Batam</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Hotel Lombok Raya.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Hotel Lombok Raya</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/katamaran Hotel & Resort.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">katamaran Hotel & Resort</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/jambuluk Oceano Gili Trawangan Resort.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Jambuluk Oceano Gili Trawa ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Aston Inn Mataram.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Aston Inn Mataram</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Hotel Zamburger Lombok.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Hotel Zamburger Lombok</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-lombok wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Svarga Resort Lombok.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Svarga Resort Lombok</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Royal Tulip Gunung Geulis Resort & Golf.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Royal Tulip Gunung Geulis Re ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Palace Hotel Cipanas.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Palace Hotel Cipanas</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Aston Sentul Lake Resort & Conference Center.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Aston Sentul Lake Resort & C ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Pullman Ciawi Vimala Hills Resort Spa & Convention.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Pullman Ciawi Vimala Hills R ...</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Chevilly Resort and Camp.webp" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Chevilly Resort and Camp</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bogor wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="assets/img/filter-hotel/Grand Savero Hotel Bogor.jpg" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>

              <div class="portfolio-info" style="text-align: left">
                <h4><a href="portfolio-details.html" style="text-decoration: none;">Grand Savero Hotel Bogor</a></h4>
                <i class="bi bi-star-fill" style="color: yellow;"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <i class="bi bi-star-fill" style="color: yellow"></i>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

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