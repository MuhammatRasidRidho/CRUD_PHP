<?php
$koneksi = mysqli_connect("localhost","root","","crud");

$id = $_GET['id'];
$hapus = mysqli_query($koneksi, "DELETE FROM toperasi WHERE id='$id'");
if ($hapus){
	echo "Data berhasil dihapus";
}
else{
	echo "Data gagal dihapus";
}
?>