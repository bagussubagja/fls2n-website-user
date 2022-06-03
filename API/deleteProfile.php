<?php
include '../API/db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /html/login.php");
}

if (isset($_GET['nama_profile'])) {
    $nama_profile = $_GET['nama_profile'];
    $id_login = $_SESSION['id_login'];
    $query = "DELETE FROM profile WHERE nama_profile = '$nama_profile' AND id_login = '$id_login'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        header("Location: /html/profile.php");
    } else {
        echo "
            <script>
                alert('Gagal menghapus profile!');
                window.location.href = '../html/profile.php';
            </script>";
    }
}
