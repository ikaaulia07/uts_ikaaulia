<?php

include 'koneksi.php';

if(isset($_POST['simpan'])){

$nama = $_POST['nama_produk'];
$jenis = $_POST['jenis_produk'];
$harga = $_POST['harga'];
$manfaat = $_POST['manfaat'];

$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($tmp,'upload/'.$foto);

mysqli_query($conn,
"INSERT INTO skincare VALUES(
'',
'$nama',
'$jenis',
'$harga',
'$manfaat',
'$foto'
)");

header("Location:index.php");

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
Tambah Produk
</div>

<div class="form-container">

<form method="POST" enctype="multipart/form-data">

<input type="text"
name="nama_produk"
placeholder="Nama Produk"
required>

<input type="text"
name="jenis_produk"
placeholder="Jenis Produk"
required>

<input type="text"
name="harga"
placeholder="Harga"
required>

<textarea
name="manfaat"
placeholder="Manfaat Produk"
required></textarea>

<input type="file"
name="foto"
required>

<button type="submit"
name="simpan">
Simpan
</button>

</form>

</div>

</body>
</html>