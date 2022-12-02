<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>

  <link rel="stylesheet" href="../assets/stylelogin.css" />
</head>

<body>
  <div class="mainlogin">
    <div class="darkbg"></div>
    <div class="containerlogin">
      <h1>Selamat Datang!</h1>
      <p class="tulisan">Login - FLS2N Gallery Website</p>

      <div id="salahpass">

      </div>

      <form action="../API/proses_login.php" method="POST">
        <input type="text" name="username" id="loginusername" class="inputform" placeholder="Username" required />
        <br />
        <input type="password" name="password" id="loginpassword" class="inputform" placeholder="Password" required />
        <p class="forgot"><a href="" class="daftarhover">Lupa kata sandi?</a></p>

        <button id="buttonlogin" type="submit" onclick="validasi()">
          Masuk Sekarang
        </button>

        <p>
          Tidak punya akun?
          <a href="../html/signup.php" class="daftarhover">Daftar</a>
        </p>
      </form>
    </div>
  </div>
  <script src="../scripts/validasiLogin.js"></script>
</body>

</html>