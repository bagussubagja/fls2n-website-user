<?php
include_once '../API/db.php';

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /html/login.php");
}

$queryKategori = "SELECT * FROM movies WHERE movies.position='Juara 1' limit 4";
$queryKategori2 = "SELECT * FROM movies WHERE movies.position='Juara 1' limit 4,4";
$queryKategori3 = "SELECT * FROM movies WHERE movies.position='Juara 1' limit 8,4";
$resultKategori = $connect->query($queryKategori);
$resultKategori2 = $connect->query($queryKategori2);
$resultKategori3 = $connect->query($queryKategori3);

?>

<!DOCTYPE html>
<html lang="en">

<style>
  a{
    text-decoration: none;
  }
</style>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/stylekategori.css" />
  <title>Nonton film dimana aja</title>
</head>

<body>
  <!-- navbar -->
  <div class="navbar">
    <img src="../assets/image/logo-rounded.png" alt="Logo" />
    <ul>
      <li></li>
    </ul>
    <ul class="nav">
      <li><a href="../index.php">Home</a></li>
      <li><a href="about_us.html">About</a></li>
      <li><a href="#">Movies</a></li>
    </ul>
  </div>

  <div class="ContainerMain">
    <div class="info">
      <h1>Kumpulan Juara</h1>
      <p class="movie-desc">
        Semua film yang ada di sini adalah film yang meraih juara pertama di setiap tingkatan baik itu kabupaten maupun tingkat nasional.
      </p>
    </div>
    <div class="kumpulanjuara">
      <div class="judul">
        <h2>Kumpulan Juara</h2>
      </div>
      <div class="section">
        <div class="wrapper">
          <section>
            <?php
            while ($row = $resultKategori->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="/html/view_detail.php?id=' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
          </section>
        </div>
        <br>
        <div class="wrapper">
          <section>
            <?php
            while ($row = $resultKategori2->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="/html/view_detail.php?id=' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
          </section>
        </div>
        <br>
        <div class="wrapper">
          <section>
            <?php
            while ($row = $resultKategori3->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="/html/view_detail.php?id=' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
          </section>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="footer-up">
        <div class="footer1">
          <ul>
            <li>
              <p>Sebuah website yang menampung film pendek karya anak bangsa dalam ajang Festival Lomba Seni dan Sastra Nasional.</p>
            </li>
            <li><span><img src="../assets/image/Mail.png" alt="IconFooter"></span>
              <p>GSF-Team@mail.com</p>
            </li>
            <li><span><img src="../assets/image/Phone.png" alt="IconFooter"></span>
              <p>+ 12 3456 7890</p>
            </li>
          </ul>
        </div>
        <div class="footer2">
          <ul>
            <li><a href="https://sma.pusatprestasinasional.kemdikbud.go.id/fls2n/uploads/unduhan/YMTvvaqLWbgc2HwANSUQOz3sk12QchvMn9J77LG9.pdf">Buku Panduan FLS2N 2021</a></li>
            <li><a href="https://www.instagram.com/fls2n_kemdikbud/">Instagram FLS2N Kemdikbud</a></li>
            <li><a href="https://www.youtube.com/c/KEMENDIKBUDRI2021">Youtube Kemdikbud RI</a></li>
            <li><a href="https://linktr.ee/pusprenassmk">Juknis FLS2N SMK 2022</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Design with hard work &copy; Tim Groove Street Families 2022. All right reserved</p>
      </div>
    </div>
  </div>
  <!-- container-main -->
</body>
<script src="scripts/homepage.js"></script>

</html>