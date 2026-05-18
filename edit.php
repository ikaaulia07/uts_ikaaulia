<?php

include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM skincare WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(isset($_POST['update'])){

$nama = $_POST['nama_produk'];
$jenis = $_POST['jenis_produk'];
$harga = $_POST['harga'];
$manfaat = $_POST['manfaat'];

mysqli_query($conn,
"UPDATE skincare SET

nama_produk='$nama',
jenis_produk='$jenis',
harga='$harga',
manfaat='$manfaat'

WHERE id='$id'
");

header("Location:index.php");

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Produk</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

<form method="POST">

<input type="text"
name="nama_produk"
value="<?php echo $d['nama_produk']; ?>">

<input type="text"
name="jenis_produk"
value="<?php echo $d['jenis_produk']; ?>">

<input type="text"
name="harga"
value="<?php echo $d['harga']; ?>">

<textarea
name="manfaat"><?php echo $d['manfaat']; ?></textarea>

<button type="submit"
name="update">
Update
</button>

</form>

</div>

</body>
</html>