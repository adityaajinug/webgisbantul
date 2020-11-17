<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'uts_gis');


function getJml($koneksi, $id_kec)
{
  $jml = 0;
  $sql = "select jml from data_dbd where id_kec='$id_kec'";
  $hasil = mysqli_query($koneksi, $sql);
  $data = mysqli_fetch_array($hasil);
  if ($data) {
    $jml = $data['jml'];
  }
  return $jml;
}
