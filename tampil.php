<table border="1">
<tr>
	<th> No </th>
	<th> Nama </th>
	<th> Alamat </th>
	<th> Umur </th>
	<th> Aksi </th>
</tr>
<?php
mysql_connect("localhost","root","");
mysql_select_db("crud");

$no = 1;
$sql = mysql_query("SELECT * FROM toperasi");
while ($data = mysql_fetch_array($sql)){
	echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td><td>$data[umur]</td>
		  <td><a href=ubah.php?id=$data[id]>Ubah</a> | <a href=hapus.php?id=$data[id]>Hapus</a></td></tr>";
	$no++;
}
?>