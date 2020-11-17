<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'uts_gis');
$sql = "SELECT * FROM data_faskes WHERE longtitude>0";
$hasil = mysqli_query($koneksi, $sql);

?>

var json_RumahSakitdanPuskesmas_1 = {
"type": "FeatureCollection",
"name": "RumahSakitdanPuskesmas_1",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [

<?php

while ($data = mysqli_fetch_array($hasil)) {
  $id = $data['id'];
  $long = $data['longtitude'];
  $latitude = $data['latitude'];
  $nama = $data['nama'];
  $alamat = $data['alamat'];
  $kecamatan = $data['kecamatan'];
  $kotakab = $data['kota/kab'];
  $kategori = $data['kategori'];


?>

  { "type": "Feature", "properties": { "id":"<?= $id; ?>", "Longtitude": "<?= $long; ?>", "Latitude": "<?= $latitude; ?>", "Nama": "<?= $nama; ?>", "Alamat": "<?= $alamat; ?>", "Kecamatan": "<?= $kecamatan; ?>", "Kota\/Kab": "<?= $kotakab; ?>", "Kategori": "<?= $kategori; ?>"}, "geometry": { "type": "Point", "coordinates": [ <?= $long; ?>, <?= $latitude; ?> ] } },

<?php } ?>
]
}