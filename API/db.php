<?php
$connect = mysqli_connect("localhost:4000", "root", "mypass");
mysqli_select_db($connect, "database_fls2n_web") or die("Tidak dapat konek ke database");
echo "Koneksi Berhasil";
