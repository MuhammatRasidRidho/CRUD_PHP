<?php
mysql_connect("localhost","root","");
mysql_select_db("crud");

$id = $_GET['id'];
$data = mysql_fetch_array(mysql_query("SELECT * FROM toperasi WHERE id='$id'"));

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