<?php
include_once '../API/db.php';
include_once '../API/proses_db_index.php';

session_start();
if (!isset($_SESSION['username'])) {
  header("Location: /html/login.php");
}

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $data = "SELECT * FROM `movies` WHERE `id` = $id";
  $result_view = mysqli_query($connect, $data);
}

$query5 = "SELECT * FROM movies limit 1,4";
$query6 = "SELECT * FROM movies limit 6,3";
$resultview_rek1 = $connect->query($query5);
$resultview_rek2 = $connect->query($query6);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nonton Film Dimana Aja</title>
  <link rel="stylesheet" href="/assets/view_detail.css" />
</head>

<body>
  <div class="navbar">
    <img src="../assets/image/logo-rounded.png" alt="Logo" />
    <!-- <ul>
      <div class="action">
        <div class="profile" onclick="menuToggle();">
          <img src="/assets/image/alif.png" />
        </div>
        <div class="menu">
          <ul>
            <li style="color: black; justify-content:center;"></li>
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
    </ul> -->
    <ul class="nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="./html/about_us.html">About</a></li>
      <li><a href="./html/kategori2.php">Movies</a></li>
    </ul>
  </div>

  <!-- container-main -->
  <div class="ContainerMain">
    <?php
    while ($row = $result_view->fetch_array()) {

    ?>
      <div class="Video">
        <iframe width="1376" height="768" src="<?php echo $row['embedded_link'] ?>" frameborder="0"></iframe>
        <div class="info">
          <div class="test">
            <h1><?php echo $row['name'];
                ?></h1>
            <h3><?php echo $row['school'] . ' | ' . $row['year'];

                ?></h3>
          </div>
        </div>
        <div class="desc-mov">
          <h2>Deskripsi</h2>
          <p>
          <?php echo $row['description'];
        }
          ?>
          </p>
        </div>
      </div>
  </div>

  <div class="rekomendasi">
    <div class="section">

      <h2>Rekomendasi</h2>
      <div class="wrapper">
        <section id="section1_rek">
          <a href="#section2_rek" class="arrow__btn_rek">‹</a>
          <?php
          while ($row = $resultview_rek1->fetch_assoc()) {
            echo '<div class="item_kj">';
            echo '<a href="view_detail.php?id=' . $row['id'] . '">';
            echo '<img src="' . $row['thumbnail'] . ' " alt="" />';
            echo '<div class="text-movie-view1">';
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['archievement'] . "</p>";
            echo "<p>" . $row['year'] . " - " . $row['duration'];
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
          while ($row = $resultview_rek2->fetch_assoc()) {
            echo '<div class="item_kj">';
            echo '<a href="view_detail.php?id=' . $row['id'] . '">';
            echo '<img src="' . $row['thumbnail'] . '" />';
            echo '<div class="text-movie-view1">';
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<p>" . $row['archievement'] . "</p>";
            echo "<p>" . $row['year'] . " - " . $row['duration'];
            echo "</p>";
            echo '</div>';
            echo '</a>';
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
<script src="scripts/view_detail.js"></script>

</html>