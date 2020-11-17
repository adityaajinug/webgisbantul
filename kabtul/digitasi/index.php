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
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>
</head>

<body>
    <div id="map">
    </div>
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
    <script src="data/kecamatan_0.js"></script>
    <script src="data/RumahSakitdanPuskesmas_1.php"></script>
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-8.119728170521581, 110.135394549991],
            [-7.72432741503205, 110.73627555920136]
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

        function pop_kecamatan_0(feature, layer) {
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

        function style_kecamatan_0_0(feature) {
            switch (String(feature.properties['Kecamatan'])) {
                case 'Bambang Lipuro':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(247,252,245,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Banguntapan':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(239,249,236,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Bantul':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(231,246,226,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Dlingo':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(219,241,213,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Imogiri':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(205,236,198,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Jetis':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(189,229,183,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kasihan':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(172,222,166,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kretek':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(154,214,149,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pajangan':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(133,204,132,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pandak':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(112,194,116,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Piyungan':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(89,183,105,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pleret':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(66,172,93,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Pundong':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(52,157,83,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sanden':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(38,143,72,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sedayu':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(22,128,60,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sewon':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(5,113,47,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Srandakan':
                    return {
                        pane: 'pane_kecamatan_0',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(0,92,37,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_kecamatan_0');
        map.getPane('pane_kecamatan_0').style.zIndex = 400;
        map.getPane('pane_kecamatan_0').style['mix-blend-mode'] = 'normal';
        var layer_kecamatan_0 = new L.geoJson(json_kecamatan_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_kecamatan_0',
            layerName: 'layer_kecamatan_0',
            pane: 'pane_kecamatan_0',
            onEachFeature: pop_kecamatan_0,
            style: style_kecamatan_0_0,
        });
        bounds_group.addLayer(layer_kecamatan_0);
        map.addLayer(layer_kecamatan_0);

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
                fillColor: 'rgba(0,0,0,1.0)',
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
            'kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/kecamatan_0_BambangLipuro0.png" /></td><td>Bambang Lipuro</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Banguntapan1.png" /></td><td>Banguntapan</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Bantul2.png" /></td><td>Bantul</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Dlingo3.png" /></td><td>Dlingo</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Imogiri4.png" /></td><td>Imogiri</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Jetis5.png" /></td><td>Jetis</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Kasihan6.png" /></td><td>Kasihan</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Kretek7.png" /></td><td>Kretek</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Pajangan8.png" /></td><td>Pajangan</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Pandak9.png" /></td><td>Pandak</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Piyungan10.png" /></td><td>Piyungan</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Pleret11.png" /></td><td>Pleret</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Pundong12.png" /></td><td>Pundong</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Sanden13.png" /></td><td>Sanden</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Sedayu14.png" /></td><td>Sedayu</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Sewon15.png" /></td><td>Sewon</td></tr><tr><td style="text-align: center;"><img src="legend/kecamatan_0_Srandakan16.png" /></td><td>Srandakan</td></tr></table>': layer_kecamatan_0,
        }, {
            collapsed: false
        }).addTo(map);
        setBounds();
    </script>
</body>

</html>