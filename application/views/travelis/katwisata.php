<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelis - Kategori Wisata</title>
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
          <li><a href="<?php echo base_url('travelis'); ?>" style="text-decoration: none;">Beranda</a></li>
          <li class="dropdown active"><a href="#" class="nav-link scrollto" style="text-decoration: none;"><span>Liburan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?php echo base_url('travelis/katwisata'); ?>" style="text-decoration: none;">Wisata</a></li>
              <li><a href="<?php echo base_url('travelis/kathotel'); ?>" style="text-decoration: none;">Hotel</a></li>
            </ul>
          </li>
              <li><a href="<?php echo base_url('mahasiswa'); ?>" style="text-decoration: none;">Tiket Saya</a></li>
              <li><a href="<?php echo base_url('travelis/reels'); ?>" style="text-decoration: none;">Reels</a></li>
              <li><a href="portfolio-details.html" style="text-decoration: none;"><i class="bi bi-person-fill" style="font-size: 20px;"></i></a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><br><!-- End Header -->
  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row d-flex justify-content=between">
        <div class="section-title col-lg-10">
          <h2 class="mb-0 pb-0"><br><b>Jelajahi Kategori Xperience</b></h2>
          <p style="font-size: 18px;"><b>jelajahi Aktivitas dan Pengalaman unik Sepuasnya</b></p>
        </div>
        <div class="container-fluid container-a col-lg-2 mt-5">
        
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle rounded-5" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #124364; font-size: 22px; width: 120px; text-align: center;">
              Kota
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li class="dropdown-item">
                    <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Bali</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Balikpapan</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Bandung</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Batam</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Bogor</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Lombok</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Makassar</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Malang</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Manado</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Padang</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Solo</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Surabaya</a></span>
                </li>
                <li class="dropdown-item">
                  <span class="dropdown-item-text"><a href="<?php echo base_url('travelis/bali_w'); ?>" style="color: black; text-decoration: none;">Yogyakarta</a></span>
                </li>
            </ul>
        </div>
      </div>
      </div>
  
        <hr>

      <h2  class=" mb-0 pb-0"><br><b>Pantai</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/pantai/Pantai Tanjung Ringgit.webp'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Pantai Tanjung Ringgit</a></h4>
              <p style="font-size: 14px; color:black;">Lombok</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/pantai/Pantai-Bulukumba.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Pantai Bulukamba</a></h4>
              <p style="font-size: 14px; color:black;">Makassar</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/bali-wisata/pantai-kuta.webp'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Pantai Kuta</a></h4>
              <p style="font-size: 14px; color:black;">Bali</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>


        <h2  class=" mb-0 pb-0"><br><b>Pegunungan</b></h2>
        <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
        
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/gunung/bromo2.jpeg'); ?>" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>
  
              <div class="portfolio-info" style="text-align: left">
                <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Gunung Bromo</a></h4>
                <p style="font-size: 14px; color:black;">Bromo</p>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/gunung/rinjani.jpg'); ?>" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>
  
              <div class="portfolio-info" style="text-align: left">
                <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Gunung Rinjani</a></h4>
                <p style="font-size: 14px; color:black;">Lombok</p>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>
  
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?php echo base_url('assets/gunung/kawah ijen.webp'); ?>" class="img-fluid" alt="">
                <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
                <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
              </figure>
  
              <div class="portfolio-info" style="text-align: left">
                <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Kawah Gunung Ijen</a></h4>
                <p style="font-size: 14px; color:black;">Kab. Bondowoso - Kab. Banyuwangi</p>
                <p style="text-transform: none;">Rp 000,000</p>
              </div>
            </div>
          </div>  
      </div>

      <h2  class=" mb-0 pb-0"><br><b>Air Terjun</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/air-terjun/Coban-Jahe2.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Coban Jahe</a></h4>
              <p style="font-size: 14px; color:black;">Malang</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/air-terjun/sarasah ulu gadut2.jpeg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Sarasah Ulu Gadut</a></h4>
              <p style="font-size: 14px; color:black;">Padang</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/air-terjun/biroro2.2.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Air Terjun Biroro</a></h4>
              <p style="font-size: 14px; color:black;">Makassar</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>
      </div>
      <h2  class=" mb-0 pb-0"><br><b>Kolam Renang</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kolam-renang/waterpark-ocarina-3.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Watrepark Ocarina</a></h4>
              <p style="font-size: 14px; color:black;">Batam</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kolam-renang/Kolam Renang Aryaduta Manado2.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href=<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Kolam Renang Aryaduta Ma ...</a></h4>
              <p style="font-size: 14px; color:black;">Manado</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kolam-renang/aquaboom waterpark5.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Aquaboom Waterpark</a></h4>
              <p style="font-size: 18px; color:black;">Balikpapan</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>
      </div>

      <h2  class=" mb-0 pb-0"><br><b>Kebun Binatang</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun-binatang/taman-safari-indonesia.webp'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Taman Safari Indonesia</a></h4>
              <p style="font-size: 14px; color:black;">Bogor</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun-binatang/bandung zoological garden.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Bandung Zoological Garden</a></h4>
              <p style="font-size: 14px; color:black;">Bandung</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun-binatang/gembira loka zoo.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Gembira Loka Zoo</a></h4>
              <p style="font-size: 14px; color:black;">Yogyakarta</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>
      </div>
      <h2  class=" mb-0 pb-0"><br><b>Sejarah</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/sejarah/Candi Borobudur.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Candi Borobudur</a></h4>
              <p style="font-size: 14px; color:black;">Yogyakarta</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/sejarah/Candi Prambanan.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Candi Prambanan</a></h4>
              <p style="font-size: 14px; color:black;">Yogyakarta</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/sejarah/monumen ground zero2.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Monumen Ground Zero</a></h4>
              <p style="font-size: 14px; color:black;">Bali</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>
      </div>
      <h2  class=" mb-0 pb-0"><br><b>Perkebunan</b></h2>
      <p class="text-end"><a href="<?= base_url('travelis/pantai'); ?>">Lihat Lainnya ...</a></p>
      
      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun/kusuma agro wisata.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Kusuma Agro Wisata</a></h4>
              <p style="font-size: 14px; color:black;">Malang - Batu</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun/kebun teh-wonosari.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">Kebun teh Wonosari</a></h4>
              <p style="font-size: 14px; color:black;">Malang</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <figure>
              <img src="<?php echo base_url('assets/kebun/la fresa strawberry2.jpg'); ?>" class="img-fluid" alt="">
              <a href="<?= base_url('mahasiswa'); ?>" class="link-preview" title="Pesan Tiket"><i class="bx bx-plus"></i></a>
              <a href="<?= base_url('travelis/detail'); ?>" class="link-details" title="Lihat Deskripsi"><i class="bx bx-link"></i></a>
            </figure>

            <div class="portfolio-info" style="text-align: left">
              <h4><a href="<?= base_url('travelis/detail'); ?>" style="text-decoration: none;">La Fresa Strawberry</a></h4>
              <p style="font-size: 14px; color:black;">Bandung</p>
              <p style="text-transform: none;">Rp 000,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div> 
  </section><!-- End Portfolio Section -->

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