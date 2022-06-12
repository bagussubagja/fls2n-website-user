<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lupa Password</title>

  <link rel="stylesheet" href="../assets/stylelogin.css" />
</head>

<body>
  <div class="mainlogin">
    <div class="darkbg"></div>
    <div class="containerlogin">
      <h1>Lupa Password?</h1>
      <p class="tulisan">FLS2N Gallery Website</p>

      <div id="salahpass">

      </div>

      <form action="../API/password.php" method="POST">
        <input type="text" name="username" id="loginusername" class="inputform" placeholder="Username" required />
        <br />
        <input type="text" name="name" id="loginpassword" class="inputform" placeholder="Nama Panjang" required />

        <button id="buttonlogin" type="submit" onclick="validasi()" style="margin-top : 40px; margin-bottom : 22px">
          Cari Password
        </button>

        <p>
          Tidak punya akun?
          <a href="../html/signup.php" class="daftarhover">Daftar</a>
        </p>
        <p>
          Kembali?
          <a href="../html/login.php" class="daftarhover">Login</a>
        </p>
      </form>

    </div>
  </div>
  <script src="../scripts/validasiLogin.js"></script>
</body>

</html>