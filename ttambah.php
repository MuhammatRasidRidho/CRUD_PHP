<?php
mysql_connect("localhost","root","");
mysql_select_db("crud");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur	= $_POST['umur'];

$masuk = mysql_query("INSERT INTO toperasi(nama,alamat,umur) VALUES('$nama','$alamat','$umur')");
if ($masuk){
	echo "Data berhasil disimpan";
}
else{
	echo "Data gagal disimpan";
}
?>