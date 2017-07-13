<?php
$koneksi = mysqli_connect("localhost","root","","crud");


$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$ubah = mysqli_query($koneksi, "UPDATE toperasi SET nama='$nama',alamat='$alamat',umur='$umur' WHERE id='$id'");
if ($ubah){
	echo "Data berhasil diubah";
}
else{
	echo "Data gagal diubah";
}
?>