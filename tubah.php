<?php
mysql_connect("localhost","root","");
mysql_select_db("crud");

$id = $_GET['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];

$ubah = mysql_query("UPDATE toperasi SET nama='$nama',alamat='$alamat',umur='$umur' WHERE id='$id'");
if ($ubah){
	echo "Data berhasil diubah";
}
else{
	echo "Data gagal diubah";
}
?>