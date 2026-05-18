<?php

include 'koneksi.php';

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($conn,
"SELECT * FROM admin
WHERE username='$username'
AND password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){

$_SESSION['login'] = true;

echo "
<script>
alert('Login berhasil');
window.location='index.php';
</script>
";

}else{

echo "
<script>
alert('Username atau password salah');
</script>
";

}

}

?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
Beauty & Skincare
</div>

<div class="form-container">

<h2>Login Admin</h2>

<form method="POST">

<input type="text"
name="username"
placeholder="Username"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit"
name="login">
Login
</button>

</form>

</div>

<div class="footer">
© 2026 Beauty & Skincare
</div>

</body>
</html>