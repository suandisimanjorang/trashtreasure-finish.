<?php
require 'system/config/koneksi.php'
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <!-- Other Tags -->
  <meta name="dicoding:email" content="aldonifrz@gmail.com">
  <!-- Other Tags -->
  <title>Beranda</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Contrail+One|Raleway" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
  <link rel="shortcut icon" href="asset/internal/img/img-local/favicon.ico">
  <link rel="stylesheet" href="asset/internal/css/style-index.css">
  <link rel="stylesheet" href="asset/internal/css/style-index_1.css">

  <script src="asset/internal/js/preloader.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
  </script>

</head>

<body>

  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="asset/internal/img/img-local/spiner.gif" width="80">
    </div>
  </div>


  <!--Navbar-->
  <header>
    <a href="#" id="logo"></a>
    <nav>
      <a href="#" id="menu-icon"></a>
      <ul id="top-menu">
        <li style="list-style: none; display: inline"></li>
        <li class="active">
          <a href="#">Beranda</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#foo">Petunjuk</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#tim">Tim Kami</a>
        </li>
        <li style="list-style: none; display: inline"></li>
        <li>
          <a href="#lok">Lokasi</a>
        </li>
        <li style="list-style: none; display: inline"></li>
      </ul>
    </nav>
  </header>

  <!-- konten1 -->
  <div class="page-wrap">
    <div class="header">
      <div class="box-1">
        <h1 disabled>Trash Treasure</h1>
        <p> Merubah sampah menjadi penghasilan tambahan Anda !!! </p>
        <br> <br>

        <div class="center">
          <a href="page/login.php" target="_blank">
            <div class="btn" align="center">Login</div>
          </a> <!-- End Btn -->

          <a href="page/registrasi.php">
            <div id="btn2" align="center">Register</div>
          </a> <!-- End Btn2 -->
        </div>
      </div>
    </div>
  </div>
  </div>


  <!--konten2-->
  <div id="foo">
    <section class="team">
      <div class="container">
        <div class="row">
          <h1>TERTARIK BERGABUNG ???</h1>
          <p>Trash Treasure merupakan langkah peduli lingkungan yang merupakan project Capstone Dicoding SIB Batch 5. Selain bidang bank sampah kami juga berfokus pada pengelolaan sampah, seperti komposting berbasis sampah, kerajinan berbahan baku sampah, dan masih banyak lagi program yang kami kembangkan Jika Anda berminat untuk bergabung, silahkan ikuti langkah berikut ini.</p>
        </div>
        <div class="row mgt50px">
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/1.jpg">
            </div>
            <div class="details">
              <h3>#Tahap1<br><span>Lakukan Pendaftaran</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/2.jpg">
            </div>
            <div class="details">
              <h3>#Tahap2<br><span>Pemilahan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/3.jpg">
            </div>
            <div class="details">
              <h3>#Tahap3<br><span>Penimbangan Sampah</span></h3>
            </div>
          </div>
          <div class="coloumn">
            <div class="imgBox">
              <img src="asset/internal/img/img-content/4.jpg">
            </div>
            <div class="details">
              <h3>#Tahap4<br><span>Mendapat Keuntungan</span></h3>
            </div>
          </div>
          <div style="clear: both;"></div>
        </div>
      </div>
    </section>
  </div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="asset/internal/js/index.js"></script>

  <!--konten maps-->

  <br>
  <div id="lok">
  <div class="row mgt50px">
    <h1 align="center">Lokasi Trash Treasure</h1>
    <br>
    <br>
    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1990.9511006681644!2d98.6477267!3d3.6098492!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e10f50f15af%3A0x5f1f153c0bdb6c8c!2sGg.%20Bersama%2C%20Helvetia%20Tim.%2C%20Kec.%20Medan%20Helvetia%2C%20Kota%20Medan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1702552281588!5m2!1sid!2sid" width="100%" height="470" frameborder="0" style="margin-bottom: 0;" allowfullscreen></iframe>
    </div>
  </div>
</div>
  <!--footer-->
  <footer class="footer-distributed">

    <div class="footer-left">

      <a href="#" id="logo_f"></a>
      <br>

      <p class="footer-links">
      <ul>
        <a href="#">Beranda</a>
        ·
        <a href="#foo">Petunjuk</a>
        ·
        <a href="#tim">Tim Kami</a>
        ·
        <a href="#lok">Lokasi</a>
        </p>

        <p><font color="white">Copyright &#169; <script type='text/javascript'>var creditsyear = new Date();document.write(creditsyear.getFullYear());</script> <a expr:href='data:blog.homepageUrl'><data:blog.title/></a>. All rights reserved.</font></p>
    </div>

    <div class="footer-center" id="tim">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span> Provinsi Sumatera Utara</span> Kecamatan Medan Helvetia, Kota Medan.</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p><a href="sms:(+62)85162735995">(+62)851 6273 5995</a></p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:aldonifrz@gmail.com">aldonifrz@gmail.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>Kunjungi Sosial Media Kami!</span>
        Untuk yang ingin lebih dekat dengan Trash Treasure, silahkan kunjungi sosial media kami dibawah ini!
      </p>

      <div class="footer-icons">

        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>

      </div>

    </div>

  </footer>

</body>

</html>