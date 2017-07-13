<?php
$koneksi = mysqli_connect("localhost","root","","crud");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur	= $_POST['umur'];
$masuk = mysqli_query( $koneksi ,"INSERT INTO toperasi(nama,alamat,umur) VALUES('$nama','$alamat','$umur')");
if ($masuk){
	echo "Data berhasil disimpan";
}
else{
	echo "Data gagal disimpan";
}
?>