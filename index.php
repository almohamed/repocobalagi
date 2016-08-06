<?php
include "koneksi.php";
$query=mysql_query("select * from tbl_user");
$jumlah=mysql_num_rows($query);
echo "<center>Jumlah data ada : ".$jumlah;
?>
<body background="a.jpg" width="150%">
</center>
<table border="1" cellspacing="0" align="center">
<tr>
<th>Nim</th>
<th>Nama</th>
<th>Alamat</th>
<th>Aksi</th>
</tr>

<?php
while($row=mysql_fetch_array($query)){
?>
<tr>
<td><?php echo $row['Nim'];?></td>
<td><?php echo $row['Nama'];?></td>
<td><?php echo $row['Alamat'];?></td>
<td>
<a href="hapus.php?nim=<? echo $row['nim']; ?>" onclick="return confirm
('Apakah anda yakin?')"a>Hapus</a>
<a href="simpan.php?nim=<? echo $row['nim']; ?>">edit</a>
</td>
<?php
}
?>
</table><br />
<a href="tambah.php">Tambah Data</a><br><br>
