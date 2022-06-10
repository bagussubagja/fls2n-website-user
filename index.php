<?php

include_once './API/db.php';
include_once './API/proses_db_index.php';

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /html/login.php");
}

$namaProfile = $_GET['nama'];
$_SESSION['nama'] = $namaProfile;
$temp_profName = $_GET['id_profile'];
$_SESSION['profName'] = $temp_profName;
if (isset($_POST['id_movie'])) {
  $id_movie = $_POST['id_movie'];

  $queryfav = "INSERT INTO favorite(id_movie , id_profile) VALUES ('$id_movie', '$temp_profName')";
  $resultfav = $connect->query($queryfav);
  if ($resultfav) {
    echo "<script>alert('Added to favorite');</script>";
  } else {
    echo "<script>alert('Failed to add to favorite');</script>";
  }
}

$queryfav = "SELECT favorite.id_favorite, favorite.id_profile, favorite.id_movie, movies.`name`, movies.duration, movies.archievement, movies.`year`, movies.thumbnail, movies.school FROM favorite INNER JOIN movies ON favorite.id_movie = movies.id WHERE favorite.id_profile=" . $_SESSION['profName'] . " LIMIT 4";
$queryfav2 = "SELECT favorite.id_favorite, favorite.id_profile, favorite.id_movie, movies.`name`, movies.duration, movies.archievement, movies.`year`, movies.thumbnail, movies.school FROM favorite INNER JOIN movies ON favorite.id_movie = movies.id WHERE favorite.id_profile=" . $_SESSION['profName'] . " LIMIT 4,4";
$resultfav = $connect->query($queryfav);
$resultfav2 = $connect->query($queryfav2);

$query = "SELECT * FROM movies limit 4";
$query2 = "SELECT * FROM movies limit 4,4";
$query3 = "SELECT * FROM movies limit 8,4";
$query4 = "SELECT * FROM movies limit 12,4";
$query5 = "SELECT * FROM movies limit 16,4";
$query6 = "SELECT * FROM movies limit 20,3";
$result = $connect->query($query);
$result2 = $connect->query($query2);
$result3 = $connect->query($query3);
$result4 = $connect->query($query4);
$result5 = $connect->query($query5);
$result6 = $connect->query($query6);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nonton Film Dimana Aja</title>
  <link rel="stylesheet" href="./assets/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
  <div class="navbar">
    <img src="assets/image/logo-rounded.png" alt="Logo" />
    <ul>
      <div class="action">
        <div class="profile" onclick="menuToggle();">
          <img src="/assets/image/alif.png" />
        </div>
        <div class="menu">
          <ul>
            <li style="color: black; justify-content:center;"><?php echo $_SESSION['nama']; ?></li>
            <li>
              <i class="fa-solid fa-user ico"></i><a href="#">My profile</a>
            </li>
            <li>
              <i class="fa-solid fa-user-pen ico"></i><a href="#">Edit profile</a>
            </li>
            <li>
              <i class="fa-solid fa-gear ico"></i><a href="#">Setting</a>
            </li>
            <li>
              <i class="fa-solid fa-arrow-right-from-bracket ico"></i><a href="/API/logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
      <li></li>
    </ul>
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="./html/about_us.html">About</a></li>
      <li><a href="">Movies</a></li>
      <li><a href="">Watchlist</a></li>
    </ul>
  </div>

  <div class="ContainerMain">
    <div class="info">
      <h1>Titik Terang</h1>
      <h3>SMAN 1 Kota Serang - 2021</h3>
      <p class="movie-desc">
        Sherlyn merupakan salah satu siswa yang berusaha untuk bangkit dan
        berprestasi di kelasnya saat menghadapi kesulitan pembelajaran jarak
        jauh akibat virus Covid-19 yang direpresentasikan melalui permainan
        catur yang Ia mainkan.
      </p>
      <p class="movie-duration">Durasi : 3m36d</p>
      <a href="./html/view_detail.php?id=1"><button class="button-1" role="button">Watch Now</button></a>
      <a href="https://bantenhits.com/2021/06/23/mengenal-alina-gadis-cantik-di-cilegon-getol-bereksperimen-hingga-bermimpi-jadi-entrepreneur-sukses-di-tanah-air/"><button class="button-2" role="button">See More</button></a>
    </div>
    <div class="kumpulanjuara">
      <div class="section">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a>
        </div>
        <h2>Favorit</h2>
        <div class="wrapper">
          <section id="section1_fav">
            <a href="#section2_fav" class="arrow__btn">‹</a>
            <?php
            while ($row = $resultfav->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="html/view_detail.php?id= ' . $row['id_movie'] . '">';
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
            <a href="#section2_fav" class="arrow__btn">›</a>
          </section>
          <section id="section2_fav">
            <a href="#section1_fav" class="arrow__btn">‹</a>
            <?php
            while ($row = $resultfav2->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="html/view_detail.php?id= ' . $row['id_movie'] . '">';
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
            <a href="#section1_fav" class="arrow__btn">›</a>
          </section>
        </div>
      </div>
    </div>
    <div class="kumpulanjuara">
      <div class="section">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a>
        </div>
        <h2>Kumpulan Juara</h2>
        <div class="wrapper">
          <section id="section1_kj">
            <a href="#section2_kj" class="arrow__btn">‹</a>
            <?php
            while ($row = $result->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="html/view_detail.php?id= ' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'];
              echo "<form method='POST'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            <a href="#section2_kj" class="arrow__btn">›</a>
          </section>
          <section id="section2_kj">
            <a href="#section1_kj" class="arrow__btn">‹</a>
            <?php
            while ($row = $result2->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="html/view_detail.php?id= ' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
              echo "<form>";
              echo "<input type='hidden' name='id_profile' value'" . $temp_profName . "'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit' name='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            <a href="#section1_kj" class="arrow__btn">›</a>
          </section>
        </div>
      </div>
    </div>
    <div class="baruditambahkan">
      <div class="section">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a>
        </div>
        <h2>Baru Ditambahkan</h2>
        <div class="wrapper">
          <section id="section1_bd">
            <a href="#section2_bd" class="arrow__btn_bd">‹</a>
            <?php
            while ($row = $result3->fetch_assoc()) {
              echo '<div class="item_bd">';
              echo '<a href="html/view_detail.php?id= ' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'];
              echo "<form>";
              echo "<input type='hidden' name='id_profile' value'" . $temp_profName . "'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            <a href="#section2_bd" class="arrow__btn_bd">›</a>
          </section>
          <section id="section2_bd">
            <a href="#section1_bd" class="arrow__btn_bd">‹</a>
            <?php
            while ($row = $result4->fetch_assoc()) {
              echo '<div class="item_bd">';
              echo '<a href="html/view_detail.php?id= ' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
              echo "<form>";
              echo "<input type='hidden' name='id_profile' value'" . $temp_profName . "'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            <a href="#section1_bd" class="arrow__btn_bd">›</a>
          </section>
        </div>
      </div>
    </div>
    <div class="rekomendasi">
      <div class="section">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a>
        </div>
        <h2>Rekomendasi</h2>
        <div class="wrapper">
          <section id="section1_rek">
            <a href="#section2_rek" class="arrow__btn_rek">‹</a>
            <?php
            while ($row = $result5->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<a href="html/view_detail.php?id= ' . $row['id'] . '">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'];
              echo "<form>";
              echo "<input type='hidden' name='id_profile' value'" . $temp_profName . "'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo "</p>";
              echo '</div>';
              echo '</a>';
              echo '</div>';
            }
            ?>
            <a href="#section2_rek" class="arrow__btn_rek">›</a>
          </section>
          <section id="section2_rek">
            <a href="#section1_rek" class="arrow__btn_rek">‹</a>
            <?php
            while ($row = $result6->fetch_assoc()) {
              echo '<div class="item_kj">';
              echo '<img src="' . $row['thumbnail'] . '" />';
              echo '<div class="text-movie-view1">';
              echo "<h2>" . $row['name'] . "</h2>";
              echo "<p>" . $row['archievement'] . "</p>";
              echo "<p>" . $row['year'] . " - " . $row['duration'];
              echo "<form>";
              echo "<input type='hidden' name='id_profile' value'" . $temp_profName . "'>";
              echo "<input type='hidden' name='id_movie' value='" . $row['id'] . "' >";
              echo "<button type='submit'>Tambah Ke Favorite</button>";
              echo "</form>";
              echo "</p>";
              echo '</div>';
              echo '</div>';
            }
            ?>
            <a href="#section1_rek" class="arrow__btn_rek">›</a>
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
            <li><span><img src="assets/image/Mail.png" alt="IconFooter"></span>
              <p>GSF-Team@mail.com</p>
            </li>
            <li><span><img src="assets/image/Phone.png" alt="IconFooter"></span>
              <p>+ 12 3456 7890</p>
            </li>
          </ul>
        </div>
        <div class="footer2">
          <ul>
            <li>Juara Film Pendek FLS2N</li>
            <li>Juara Nasional</li>
            <li>Juara Provinsi</li>
            <li>Juara Kabupaten</li>
          </ul>
        </div>
        <div class="footer3">
          <ul>
            <li>Company</li>
            <li>About</li>
            <li>Blog</li>
            <li>Partners</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Design with hard work &copy; Tim Groove Street Families 2022. All right reserved</p>
      </div>
    </div>
</body>
<script src="scripts/homepage.js"></script>

</html>