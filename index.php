<?php

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /html/login.php");
}
  $temp_profName = $_GET['id'];
  $_SESSION['profName'] = $temp_profName;
  include_once './API/db.php';
  include_once './API/proses_db_index.php';
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
      <div class="section">
        <div class="see-more"><a href="./html/kategori2.html">See More...</a>
        </div>
        <h2>Kumpulan Juara</h2>
        <div class="wrapper">
          <section id="section1_kj">
            <a href="#section2_kj" class="arrow__btn">‹</a>
            <div class="item_kj">
              <img src="assets/image/titikbalik.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj1)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_kj">
              <img src="assets/image/robot.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj2)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <div class="item_kj">
              <img src="assets/image/titikterang.png"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj3)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <div class="item_kj">
              <img src="assets/image/Olak.png"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj4)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <a href="#section2_kj" class="arrow__btn">›</a>
          </section>
          <section id="section2_kj">
            <a href="#section1_kj" class="arrow__btn">‹</a>
            <div class="item_kj">
              <img src="assets/image/janggal.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj5)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_kj">
              <img src="assets/image/patuisalang.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj6)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_kj">
              <img src="assets/image/garis akhir.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_kj7)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      </div>
            <div class="item_kj">
              <img src="assets/image/bentala.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_kj8)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>
              </div>
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
            <a href="#section2_bd" class="arrow__btn">‹</a>
            <div class="item_bd">
              <img src="assets/image/baur.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd1)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_bd">
              <img src="assets/image/akudankamu.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd2)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <div class="item_bd">
              <img src="assets/image/berproses.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd3)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <div class="item_bd">
              <img src="assets/image/isoman.png"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd4)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      
            </div>
            <a href="#section2_bd" class="arrow__btn">›</a>
          </section>
          <section id="section2_bd">
            <a href="#section1_bd" class="arrow__btn">‹</a>
            <div class="item_bd">
              <img src="assets/image/jendela dunia.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd5)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_bd">
              <img src="assets/image/new-shoes.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd6)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>
            </div>
            <div class="item_bd">
              <img src="assets/image/change.jpg"/>
              <div class="text-movie-view1">
                <?php
                while ($row = mysqli_fetch_assoc($query_bd7)) {
                  echo "<h2>" . $row['name'] . "</h2>";
                  echo "<p>" . $row['archievement'] . "</p>";
                  echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                }
                ?>
              </div>      </div>
            <div class="item_bd">
              <img src="assets/image/sukma.png"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_bd8)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>
            </div>
            <a href="#section1_bd" class="arrow__btn">›</a>
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
              <a href="#section2_rek" class="arrow__btn">‹</a>
              <div class="item_kj">
                <img src="assets/image/moral.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek1)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>
              </div>
              <div class="item_kj">
                <img src="assets/image/majutanpabatas.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek2)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>      
              </div>
              <div class="item_kj">
                <img src="assets/image/abadi.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek3)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>      
              </div>
              <div class="item_kj">
                <img src="assets/image/ngajenan.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek4)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>      
              </div>
              <a href="#section2_rek" class="arrow__btn">›</a>
            </section>
            <section id="section2_rek">
              <a href="#section1_rek" class="arrow__btn">‹</a>
              <div class="item_kj">
                <img src="assets/image/sukma.png"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek5)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>
              </div>
              <div class="item_kj">
                <img src="assets/image/change.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek6)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>
              </div>
              <div class="item_kj">
                <img src="assets/image/janggal.jpg"/>
                <div class="text-movie-view1">
                  <?php
                  while ($row = mysqli_fetch_assoc($query_rek7)) {
                    echo "<h2>" . $row['name'] . "</h2>";
                    echo "<p>" . $row['archievement'] . "</p>";
                    echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                  }
                  ?>
                </div>      </div>
              <div class="item_kj">
                <img src="assets/image/patuisalang.jpg"/>
                  <div class="text-movie-view1">
                    <?php
                    while ($row = mysqli_fetch_assoc($query_rek8)) {
                      echo "<h2>" . $row['name'] . "</h2>";
                      echo "<p>" . $row['archievement'] . "</p>";
                      echo "<p>" . $row['year'] . " - " . $row['duration'] . "</p>";
                    }
                    ?>
                  </div>
              </div>
              <a href="#section1_rek" class="arrow__btn">›</a>
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