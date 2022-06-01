<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /html/login.php");
}
  $temp_profName = $_GET['id'];
  $_SESSION['profName'] = $temp_profName;

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
            <li style="color: black; justify-content:center;"><?php echo $_SESSION['profName']; ?></li>
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
      <a href="./html/view_detail.html"><button class="button-1" role="button">Watch Now</button></a>
      <a href="https://bantenhits.com/2021/06/23/mengenal-alina-gadis-cantik-di-cilegon-getol-bereksperimen-hingga-bermimpi-jadi-entrepreneur-sukses-di-tanah-air/"><button class="button-2" role="button">See More</button></a>
    </div>
    <div class="kumpulanjuara">
      <div class="section1">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a></div>
        <h2>Kumpulan Juara</h2>

        <div class="movie-view-thumbnail">
          <div class="movie-view1">
            <div class="mySlides fade">
              <img src="assets/image/titikbalik.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Titik Balik</h2>
                <p>Juara 1 FLS2N Tingkat Nasional Aceh 2018</p>
                <p>2018 - 4m23d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/robot.png" alt="" />
              <div class="text-movie-view1">
                <h2>Robot</h2>
                <p>Juara 1 FLS2N 2019 Kota Bandung</p>
                <p>2019 - 5m01d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/moral.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Moral</h2>
                <p>Juara 1 FLS2N Tingkat Provinsi Bali</p>
                <p>2017 - 7m07d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/Olak.png" alt="" />
              <div class="text-movie-view1">
                <h2>Olak</h2>
                <p>Juara 1 FLS2N Tingkat Nasional</p>
                <p>2020 - 4m45d</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="baruditambahkan">
      <div class="section1">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a></div>
        <h2>Baru Ditambahkan</h2>
        <div class="movie-view-thumbnail2">
          <div class="movie-view2">
            <div class="mySlides fade">
              <img src="assets/image/sukma.png" alt="" />
              <div class="text-movie-view1">
                <h2>Sukma</h2>
                <p>SMK Al Amanah</p>
                <p>2021 - 4m23d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/change.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Change</h2>
                <p>SMAN 1 Tayu</p>
                <p>2021 - 3m50d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/janggal.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Janggal</h2>
                <p>SMAN 2 KS Cilegon</p>
                <p>2021 - 7m07d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/patuisalang.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Patui Salang</h2>
                <p>SMKN 2 Majene</p>
                <p>2022 - 4m45d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/garis akhir.jpg" alt="">
              <div class="text-movie-view1">
                <h2>Garis Akhir</h2>
                <p>SMA Presiden</p>
                <p>2022 - 4m23d</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="rekomendasi">
      <div class="section1">
        <div class="see-more"><a href="./kategori2.html">See More...</a></div>
        <h2>Rekomendasi</h2>
        <div class="movie-view-thumbnail3">
          <div class="movie-view1">
            <div class="mySlides fade">
              <img src="assets/image/ruangpublik.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Titik Balik</h2>
                <p>Juara 1 FLS2N Tingkat Nasional Aceh 2018</p>
                <p>2018 - 4m23d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/new-shoes.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>New Shoes</h2>
                <p>Honorable Mention FLS2N Provinsi Banten</p>
                <p>2021 - 3m12d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/jendela dunia.jpg" alt="" />
              <div class="text-movie-view1">
                <h2>Jendela Dunia</h2>
                <p>Juara 1 FLS2N t Provinsi Kalimantan Barat</p>
                <p>2021 - 3m35d</p>
              </div>
            </div>
            <div class="mySlides fade">
              <img src="assets/image/isoman.png" alt="" />
              <div class="text-movie-view1">
                <h2>Isoman</h2>
                <p>Juara 1 FLS2N Provinsi Banten</p>
                <p>2021 - 3m29d</p>
              </div>
            </div>
          </div>
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