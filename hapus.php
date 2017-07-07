<?php
mysql_connect("localhost","root","");
mysql_select_db("crud");

$id = $_GET['id'];
$hapus = mysql_query("DELETE FROM toperasi WHERE id='$id'");
if ($hapus){
	echo "Data berhasil dihapus";
}
else{
	echo "Data gagal dihapus";
}
?>