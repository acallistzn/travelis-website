<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Travelis - Bayar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon-32x32.png'); ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <div class="row portfolio-container" style="margin-left: 100px; margin-right: 20px;">
    
            <div class="col-lg-4 col-md-6 portfolio-item" style="height:480px; width: 600px; margin-right: 20px; box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.18); border-radius: 13px; ">
              <div class="portfolio-wrap" style="box-shadow: 0px 4px 14px rgba(0, 0, 0, 0);">
                
    
                <div class="portfolio-info" style="text-align: left; box-shadow: 0px 0px 0px;">
                  <h4 style="text-decoration: none; font-size: 25px; padding: 13px;">Metode Pembayaran</h4>
                  <hr style="margin-bottom: 3px;">
                 
                  <div class="containerpay">
                      <form action="#">
                          <input type="radio" name="payment" id="visa">
                          <input type="radio" name="payment" id="mastercard">
                          <input type="radio" name="payment" id="paypal">
                          <input type="radio" name="payment" id="AMEX">


                          <div class="category">
                              <label for="visa" class="visaMethod">
                                  <div class="imgName">
                                      <div class="imgContainer visa">
                                          <img src="https://i.ibb.co/vjQCN4y/Visa-Card.png" alt="" style="width: 70px;">
                                      </div>
                                  </div>
                                  <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                              </label>

                              <label for="mastercard" class="mastercardMethod">
                                  <div class="imgName">
                                      <div class="imgContainer mastercard">
                                          <img src="https://i.ibb.co/vdbBkgT/mastercard.jpg" alt="" style="width: 70px;">
                                      </div>
                                  </div>
                                  <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                              </label>

                              <label for="paypal" class="paypalMethod">
                                  <div class="imgName">
                                      <div class="imgContainer paypal">
                                          <img src="https://i.ibb.co/KVF3mr1/paypal.png" alt="" style="width: 70px;">
                                      </div>
                                  </div>
                                  <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                              </label>

                              <label for="AMEX" class="amexMethod">
                                  <div class="imgName">
                                      <div class="imgContainer AMEX">
                                          <img src="https://i.ibb.co/wQnrX86/American-Express.jpg" alt="" style="width: 70px;">
                                      </div>
                                  </div>
                                  <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                              </label>
                          </div>
                      </form>
                  </div>
                  <section id="katkota" class="d-flex flex-column justify-content-center" style="padding: 5px;" disabled>
                <div class="container" data-aos="fade-up">
                <a href="" class="btn-kota rounded-3 disabled" style="width: 100%;">Bayar</a></p>
              </div>
            </section><br>
            <h5>Bukti Bayar :</h5>
            <table style="width: 100%;">
                <tr>
                <td><form action="/action_page.php">
                  <input type="file" id="myFile" name="filename"></form></td>
                <td><button type="button" class="btn btn-primary" style="background-color: #213555;"><a href="<?php echo base_url('pemesanan'); ?>" style="color: white; text-decoration: none;">Selesai</a></button></td>
                </tr>
            </table>


                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item" style="height: 480px; width: 300px; box-shadow: 0px 4px 14px rgba(0, 0, 0, 0.18); border-radius: 13px; ">
              <div class="portfolio-wrap" style="box-shadow: 0px 4px 14px rgba(0, 0, 0, 0);">
                <div class="portfolio-info">
                  <table>
                    <tr>
                    <td><img src="<?php echo base_url('assets/pantai/Pantai-Bulukumba.jpg'); ?>" style="width: 60px; border-radius: 2px;"></td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td> </td>
                    <td><b>Pantai Bulukamba</b></td>
                    </tr>  
                </table><hr>
                <p>jumlah tiket :</p><hr>
                <p>tanggal :</p><hr>
                <h5 style="text-align: left;">Total Bayar : </h5>
                </div>
              </div>
            </div>

          </div>
        </div>
  </section>