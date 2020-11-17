var wms_layers = [];

var format_KecamatanKabBantul_0 = new ol.format.GeoJSON();
var features_KecamatanKabBantul_0 = format_KecamatanKabBantul_0.readFeatures(json_KecamatanKabBantul_0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_KecamatanKabBantul_0 = new ol.source.Vector({
    attributions: ' ',
});
jsonSource_KecamatanKabBantul_0.addFeatures(features_KecamatanKabBantul_0);
var lyr_KecamatanKabBantul_0 = new ol.layer.Vector({
                declutter: true,
                source:jsonSource_KecamatanKabBantul_0, 
                style: style_KecamatanKabBantul_0,
                interactive: true,
    title: 'Kecamatan Kab.Bantul<br />\
    <img src="styles/legend/KecamatanKabBantul_0_0.png" /> 16 - 44<br />\
    <img src="styles/legend/KecamatanKabBantul_0_1.png" /> 44 - 58<br />\
    <img src="styles/legend/KecamatanKabBantul_0_2.png" /> 58 - 84<br />\
    <img src="styles/legend/KecamatanKabBantul_0_3.png" /> 84 - 131<br />\
    <img src="styles/legend/KecamatanKabBantul_0_4.png" /> 131 - 209<br />'
        });

lyr_KecamatanKabBantul_0.setVisible(true);
var layersList = [lyr_KecamatanKabBantul_0];
lyr_KecamatanKabBantul_0.set('fieldAliases', {'ID_Kec': 'ID_Kec', 'Kecamatan': 'Kecamatan', 'kode_kab': 'kode_kab', 'Jumlah': 'Jumlah', });
lyr_KecamatanKabBantul_0.set('fieldImages', {'ID_Kec': 'TextEdit', 'Kecamatan': 'TextEdit', 'kode_kab': 'TextEdit', 'Jumlah': 'Range', });
lyr_KecamatanKabBantul_0.set('fieldLabels', {'ID_Kec': 'inline label', 'Kecamatan': 'inline label', 'kode_kab': 'inline label', 'Jumlah': 'inline label', });
lyr_KecamatanKabBantul_0.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});