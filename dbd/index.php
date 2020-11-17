<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <!-- Favicons -->
  <link href="assets/img/Lambang_Kabupaten_Bantul-removebg-preview.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="stylesheet" href="./resources/ol.css">
  <link rel="stylesheet" href="resources/fontawesome-all.min.css">
  <link rel="stylesheet" href="./resources/ol-layerswitcher.css">
  <link rel="stylesheet" href="./resources/qgis2web.css">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    .search-layer {
      top: 100px;
      left: .5em;
    }

    .ol-touch .search-layer {
      top: 130px;
    }
  </style>
  <style>
    html,
    body {
      background-color: #ffffff;
    }

    .ol-control button {
      background-color: #f8f8f8 !important;
      color: #000000 !important;
      border-radius: 0px !important;
    }

    .ol-zoom,
    .geolocate,
    .gcd-gl-control .ol-control {
      background-color: rgba(255, 255, 255, .4) !important;
      padding: 3px !important;
    }

    .ol-scale-line {
      background: none !important;
    }

    .ol-scale-line-inner {
      border: 2px solid #f8f8f8 !important;
      border-top: none !important;
      background: rgba(255, 255, 255, 0.5) !important;
      color: black !important;
    }
  </style>
  <style>
    .tooltip {
      position: relative;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 4px;
      color: white;
      padding: 4px 8px;
      opacity: 0.7;
      white-space: nowrap;
    }

    .tooltip-measure {
      opacity: 1;
      font-weight: bold;
    }

    .tooltip-static {
      background-color: #ffcc33;
      color: black;
      border: 1px solid white;
    }

    .tooltip-measure:before,
    .tooltip-static:before {
      border-top: 6px solid rgba(0, 0, 0, 0.5);
      border-right: 6px solid transparent;
      border-left: 6px solid transparent;
      content: "";
      position: absolute;
      bottom: -6px;
      margin-left: -7px;
      left: 50%;
    }

    .tooltip-static:before {
      border-top-color: #ffcc33;
    }

    .measure-control {
      top: 65px;
      left: .5em;
    }

    .ol-touch .measure-control {
      top: 80px;
    }
  </style>
  <style>
    #map {
      width: 900px;
      height: 400px;
    }

    .kotak {
      width: 910px;
      height: 430px;
      background-color: #1ABC9C;
      border-radius: 20px;
      margin: auto;
      padding: 10px;


    }

    .card {
      width: 350px;
    }
  </style>
  <title>Peta</title>
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <a href="http://localhost/webgisbantul/" class="logo mr-auto"><img src="assets/img/Untitled-1.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Beranda</a></li>
          <li class="drop-down"><a href="">Profile</a>
            <ul>
              <li><a href="http://localhost/webgisbantul/webgis/sejarah">Sejarah</a></li>
              <li><a href="http://localhost/webgisbantul/webgis/visimisi">Visi Misi</a></li>
              <li><a href="http://localhost/webgisbantul/webgis/struktur">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="http://localhost/webgisbantul/webgis/info">Data</a></li>
          <li><a href="http://localhost/webgisbantul/dbd/">Peta</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="blog.html">Peta</a></li>
        </ol>

      </div>
    </section><!-- End Breadcrumbs -->



    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">



        <div class="row">

          <div class="col-lg entries">



            <article class="entry entry-single">

              <h2 class="entry-title">
                <p><b>Peta Persebaran DBD Kabupaten Bantul 2019</b></p>
              </h2>




              <div class="entry-content">
                <div class=" kotak">
                  <div id="map">
                    <div id="popup" class="ol-popup">
                      <a href="#" id="popup-closer" class="ol-popup-closer"></a>
                      <div id="popup-content"></div>
                    </div>
                  </div>
                </div>

              </div>




            </article><!-- End blog entry -->

            <a href="http://localhost/webgisbantul/objek/#11/-7.8942/110.4109"><button class="btn btn-ijo">
                Peta Rumah Sakit dan Puskesmas Kab.Bantul
              </button></a>



          </div>




        </div>



      </div>
    </section>


  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h5>Website Resmi Pemerintah Kabupaten Bantul</h5>
            <p><strong>Kantor:</strong> <br>
              Jl. Robert Wolter Monginsidi No.1 Bantul, Yogyakarta, Indonesia 55711<br>
              United States <br><br>
              <strong>Phone:</strong> (0274) 368547, 367761<br>
              <strong>Fax:</strong> ((0274) 6462100<br>
              <strong>Email:</strong> diskominfo@bantulkab.go.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Sejarah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Visi Misi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Struktur Organisasi</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Data dan Peta</h4>
            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Data</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Peta</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter social-links">
            <h4>Social Media</h4>
            <a href="https://www.facebook.com/pemkabbantul/" class="facebook"><i class="bx bxl-facebook"></i></a>

            <a href="https://www.instagram.com/pemkabbantul/" class="instagram"><i class="bx bxl-instagram"></i></a>

            <a href="https://www.youtube.com/channel/UC3XfkK2AGWbJC9zINJQZUzw" class="youtube"><i class="bx bxl-youtube"></i></a>

          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">

      <div class="text-center">
        <div class="copyright">
          &copy; Copyright <strong><span>adityaajinug</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->

        </div>
      </div>

    </div>
  </footer><!-- End Footer -->
  <script src="resources/qgis2web_expressions.js"></script>
  <script src="resources/polyfills.js"></script>
  <script src="./resources/functions.js"></script>
  <script src="./resources/ol.js"></script>
  <script src="./resources/ol-layerswitcher.js"></script>
  <script src="layers/KecamatanKabBantul_0.php"></script>
  <script src="styles/KecamatanKabBantul_0_style.js"></script>
  <script src="./layers/layers.js" type="text/javascript"></script>
  <script src="./resources/Autolinker.min.js"></script>
  <script src="./resources/qgis2web.js"></script>

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>