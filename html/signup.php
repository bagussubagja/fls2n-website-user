<?php
include '../API/db.php';
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['nama_lengkap'];
  $query = "INSERT INTO users (username, password, name) VALUES ('$username', '$password', '$name')";
  $result = mysqli_query($connect, $query);
  if ($result) {
    echo "<script>alert('Berhasil mendaftar. Silahkan Login');</script>";
    header("Location: /html/login.html");
  } else {
    echo "<script>alert('Gagal mendaftar. Silahkan coba lagi');</script>";
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign Up</title>

  <link rel="stylesheet" href="../assets/stylesignup.css" />
</head>

<body>
  <div class="mainlogin">
    <div class="darkbg"></div>
    <div class="containerlogin">
      <h1>Selamat Datang!</h1>
      <p class="tulisan">Daftar - FLS2N Gallery Website</p>

      <div id="salahpass">

      </div>
      <form method="POST">
        <input type="text" name="username" id="username" class="inputform" placeholder="Username" required />
        <input type="text" name="nama_lengkap" id="nama" class="inputform" placeholder="Nama Lengkap" required />
        <br />
        <input type="password" name="password" id="password" class="inputform" placeholder="Password" required />
        <input type="password" id="repassword" class="inputform" placeholder="Masukan kembali password" required />

        <button id="buttonlogin" onclick="daftar()" type="submit" name="submit">Daftar Sekarang</button>

      </form>
      <p>Sudah punya akun? <a href="login.html" class="loginhover">Login</a></p>
    </div>
  </div>
  <script src="../scripts/script.js"></script>
</body>

</html>