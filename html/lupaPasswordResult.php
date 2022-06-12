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
      <h1 style="padding-bottom:80px;">Password Anda</h1>
      <h2>
        <?php
        session_start();
        if (isset($_SESSION['session_flash'])) {
            $password = $_SESSION['session_flash'];
            unset ($_SESSION['session_flash']);
            echo $password;
        }
        else {
            echo "<script>alert('Username atau nama lengkap tidak sesuai!');</script>";
            header("Location: ../html/lupaPassword.php");
        }
        ?>
      </h2>
      <h3><a href="../html/login.php" class="daftarhover">Login</a></h3>
    </div>
  </div>
</body>

</html>