<table border="1">
<tr>
	<th> No </th>
	<th> Nama </th>
	<th> Alamat </th>
	<th> Umur </th>
	<th> Aksi </th>
</tr>
<?php
$koneksi = mysqli_connect("localhost","root","","crud");


$no = 1;
$sql = mysqli_query($koneksi, "SELECT * FROM toperasi");
while ($data = mysqli_fetch_array($sql)){
	echo "<tr><td>$no</td><td>$data[nama]</td><td>$data[alamat]</td><td>$data[umur]</td>
		  <td><a href=ubah.php?id=$data[id]>Ubah</a> | <a href=hapus.php?id=$data[id]>Hapus</a></td></tr>";
	$no++;
}
?>