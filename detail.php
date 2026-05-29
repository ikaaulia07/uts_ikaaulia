<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM skincare WHERE id='$id'");

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Detail Produk</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="navbar">
Detail Produk
</div>

<div class="form-container">

<img src="upload/<?php echo $d['foto']; ?>"
style="
width:100%;
height:300px;
object-fit:cover;
border-radius:10px;
margin-bottom:20px;
">

<h2 style="color:#800000;">
<?php echo $d['nama_produk']; ?>
</h2>

<br>

<b>Jenis Produk</b>

<p>
<?php echo $d['jenis_produk']; ?>
</p>

<br>

<b>Harga</b>

<p>
Rp <?php echo $d['harga']; ?>
</p>

<br>

<b>Manfaat</b>

<p style="line-height:1.8;">
<?php echo $d['manfaat']; ?>
</p>

<br>

<a href="index.php" class="btn">
Kembali
</a>

</div>

</body>
</html>