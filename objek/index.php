<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">

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
        #map {
            width: 900px;
            height: 430px;
            background: #1ABC9C;
        }

        .kotak {
            width: 920px;
            height: 450px;
            background-color: #1ABC9C;
            border-radius: 20px;
            margin: auto;
            padding: 10px;


        }
    </style>
    <title></title>
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

        <section id="blog" class="blog">
            <div class="container">

                <div class="row">

                    <div class="col-lg entries">



                        <article class="entry entry-single">



                            <h2 class="entry-title">
                                <p><b>Peta Rumah Sakit dan Puskesmas Kabupaten Bantul</b></p>
                            </h2>




                            <div class="entry-content">
                                <div class="kotak">
                                    <div id="map"></div>
                                </div>
                            </div>


                        </article><!-- End blog entry -->


                    </div>
                    <!-- End blog entries list -->



                </div>

            </div>
        </section><!-- End Blog Section -->


    </main><!-- End #main -->
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

    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <script src="data/KecamatanKabBantul_0.js"></script>
    <script src="data/RumahSakitdanPuskesmas_1.php"></script>
    <script>
        L.ImageOverlay.include({
            getBounds: function() {
                return this._bounds;

            }
        });
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-8.038313411492167, 110.19192856923398],
            [-7.750135402784389, 110.62986575144846]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}

        function pop_KecamatanKabBantul_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">ID_Kec</th>\
                        <td>' + (feature.properties['ID_Kec'] !== null ? autolinker.link(feature.properties['ID_Kec'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">kode_kab</th>\
                        <td>' + (feature.properties['kode_kab'] !== null ? autolinker.link(feature.properties['kode_kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_KecamatanKabBantul_0_0() {
            return {
                pane: 'pane_KecamatanKabBantul_0',
                opacity: 1,
                color: 'rgba(204,204,0,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(5,73,59,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_KecamatanKabBantul_0');
        map.getPane('pane_KecamatanKabBantul_0').style.zIndex = 400;
        map.getPane('pane_KecamatanKabBantul_0').style['mix-blend-mode'] = 'normal';
        var layer_KecamatanKabBantul_0 = new L.geoJson(json_KecamatanKabBantul_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_KecamatanKabBantul_0',
            layerName: 'layer_KecamatanKabBantul_0',
            pane: 'pane_KecamatanKabBantul_0',
            onEachFeature: pop_KecamatanKabBantul_0,
            style: style_KecamatanKabBantul_0_0,
        });
        bounds_group.addLayer(layer_KecamatanKabBantul_0);
        map.addLayer(layer_KecamatanKabBantul_0);

        function pop_RumahSakitdanPuskesmas_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Longtitude</th>\
                        <td>' + (feature.properties['Longtitude'] !== null ? autolinker.link(feature.properties['Longtitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Latitude</th>\
                        <td>' + (feature.properties['Latitude'] !== null ? autolinker.link(feature.properties['Latitude'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama</th>\
                        <td>' + (feature.properties['Nama'] !== null ? autolinker.link(feature.properties['Nama'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kota/Kab</th>\
                        <td>' + (feature.properties['Kota/Kab'] !== null ? autolinker.link(feature.properties['Kota/Kab'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kategori</th>\
                        <td>' + (feature.properties['Kategori'] !== null ? autolinker.link(feature.properties['Kategori'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_RumahSakitdanPuskesmas_1_0() {
            return {
                pane: 'pane_RumahSakitdanPuskesmas_1',
                radius: 5.999999999999998,
                opacity: 1,
                color: 'rgba(255,255,255,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(26,188,156,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_RumahSakitdanPuskesmas_1');
        map.getPane('pane_RumahSakitdanPuskesmas_1').style.zIndex = 401;
        map.getPane('pane_RumahSakitdanPuskesmas_1').style['mix-blend-mode'] = 'normal';
        var layer_RumahSakitdanPuskesmas_1 = new L.geoJson(json_RumahSakitdanPuskesmas_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_RumahSakitdanPuskesmas_1',
            layerName: 'layer_RumahSakitdanPuskesmas_1',
            pane: 'pane_RumahSakitdanPuskesmas_1',
            onEachFeature: pop_RumahSakitdanPuskesmas_1,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_RumahSakitdanPuskesmas_1_0(feature));
            },
        });
        bounds_group.addLayer(layer_RumahSakitdanPuskesmas_1);
        map.addLayer(layer_RumahSakitdanPuskesmas_1);
        var baseMaps = {};
        L.control.layers(baseMaps, {
            '<img src="legend/RumahSakitdanPuskesmas_1.png" /> Rumah Sakit dan Puskesmas': layer_RumahSakitdanPuskesmas_1,
            '<img src="legend/KecamatanKabBantul_0.png" /> Kecamatan Kab. Bantul': layer_KecamatanKabBantul_0,
        }, {
            collapsed: false
        }).addTo(map);
        setBounds();
    </script>
</body>

</html>