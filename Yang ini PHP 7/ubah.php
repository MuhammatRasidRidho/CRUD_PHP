<?php
$koneksi = mysqli_connect("localhost","root","","crud");

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM toperasi WHERE id='$id'"));
echo "
	<form method=post action=tubah.php?id=$id>
	<table>
	<tr>
		<td> Nama </td>
		<td>: <input type=text name=nama value='$data[nama]'> </td>
	</tr>
	<tr valign=top>
		<td> Alamat </td>
		<td>: <textarea name=alamat>$data[alamat]</textarea> </td>
	</tr>
	<tr>
		<td> Umur </td>
		<td>: <input type=text name=umur value='$data[umur]'> </td>
	</tr>
	<tr>
		<td> <input type=submit value=Ubah> </td>
	</tr>
	</table>
	</form>
	";
?>