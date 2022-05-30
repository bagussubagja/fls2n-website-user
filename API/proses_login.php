<?php

include 'db.php';
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$name = $_POST['name'] ?? '';


$query = mysqli_query($connect, "SELECT * FROM users WHERE username = '$username' AND password = '$password'");

$result = mysqli_num_rows($query);

$row = mysqli_fetch_assoc($query);

if ($result > 0) {
    session_start();
    $_SESSION['id_login'] = $row['id'];
    $_SESSION['username'] = $username;
    $_SESSION['name'] = $row['name'];
    $_SESSION['status'] = "LOGGED_IN";

    header("location: ../index.php");
} else {
    echo "
        <script>
            alert('Username atau Password salah!');
            window.location.href = '../html/login.html';
        </script>";
}
