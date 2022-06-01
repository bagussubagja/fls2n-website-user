<?php
include './db.php';
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_profile'];
    $id_login = $_SESSION['id_login'];
    $query = "INSERT INTO profile (nama_profile, id_login) VALUES ('$nama', '$id_login')";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: ../html/profile.php");
    } else {
        echo "
            <script>
                alert('Gagal menambahkan profile!');
                window.location.href = '../html/profile.php';
            </script>";
    }
}
