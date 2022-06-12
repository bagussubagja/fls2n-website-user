<?php
include './db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_profile'];
    $id_login = $_SESSION['id_login'];
    $profile = mysqli_query($connect, "SELECT * FROM `profile` WHERE id_login = '{$id_login}'");
    if (mysqli_num_rows($profile) < 3) {
        $query = "INSERT INTO profile (nama_profile, id_login) VALUES ('$nama', '$id_login')";
        $result = mysqli_query($connect, $query);
        if ($result) {
            echo "<script>alert('Data berhasil ditambahkan');</script>";
            echo "<script>location.href='../html/profile.php';</script>";
        } else {
            echo "
                <script>
                    alert('Gagal menambahkan profile!');
                    window.location.href = '../html/profile.php';
                </script>";
        }
    } else {
        echo "<script>
        alert('Maksimal 3 profile!');
        window.location.href = '../html/profile.php';
    </script>";
    }
}
