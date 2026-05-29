<?php

include 'koneksi.php';

if(!isset($_SESSION['login'])){

header("Location: login.php");

exit;

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
Beauty & Skincare
</div>

<form method="GET" class="search-box">

<input type="text"
name="cari"
placeholder="Cari jenis produk...">

<button type="submit">
🔍
</button>

</form>

<div class="container">

<div class="top">

<a href="tambah.php" class="btn">
+ Tambah Produk
</a>

<a href="logout.php" class="logout">
Logout
</a>

</div>

<div class="card-container">
<?php

if(isset($_GET['cari'])){

$cari = $_GET['cari'];

$data = mysqli_query($conn,
"SELECT * FROM skincare
WHERE jenis_produk LIKE '%$cari%'");

}else{

$data = mysqli_query($conn,
"SELECT * FROM skincare");

}
while($d = mysqli_fetch_array($data)){

?>

<div class="card">

<img src="upload/<?php echo $d['foto']; ?>">

<div class="card-body">

<h2>
<?php echo $d['nama_produk']; ?>
</h2>

<div class="label">
Jenis Produk
</div>

<p>
<?php echo $d['jenis_produk']; ?>
</p>

<div class="label">
Harga
</div>

<p>
Rp <?php echo $d['harga']; ?>
</p>

<div class="aksi">

<a href="detail.php?id=<?php echo $d['id']; ?>">
Detail
</a>

<a href="edit.php?id=<?php echo $d['id']; ?>" class="edit">
Edit
</a>

<a href="hapus.php?id=<?php echo $d['id']; ?>" class="hapus">
Hapus
</a>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

<div class="footer">
© 2026 Beauty & Skincare
</div>

</body>
</html>