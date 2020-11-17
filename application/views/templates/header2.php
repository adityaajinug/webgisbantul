<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $head; ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/website/img/Lambang_Kabupaten_Bantul-removebg-preview.png" rel="icon">
  <link href="<?= base_url() ?>assets/website/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/website/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/website/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/website/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/website/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/website/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/website/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/website/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <a href="<?= base_url() ?>" class="logo mr-auto"><img src="<?= base_url() ?>assets/website/img/Untitled-1.png"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url() ?>">Beranda</a></li>
          <li class="drop-down"><a href="">Profile</a>
            <ul>
              <li><a href="<?= base_url('webgis/sejarah'); ?>">Sejarah</a></li>
              <li><a href="<?= base_url('webgis/visimisi') ?>">Visi Misi</a></li>
              <li><a href="<?= base_url('webgis/struktur') ?>">Struktur Organisasi</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('webgis/info') ?>">Data</a></li>
          <li><a href="http://localhost/webgisbantul/dbd/">Peta</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->