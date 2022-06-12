<?php
include './db.php';

session_start();

$sql= "SELECT * FROM users WHERE username = '{$_POST['username']}' AND name = '{$_POST['name']}' "; 
$result = mysqli_query($connect,$sql); 
$check = mysqli_fetch_array($result); 
if(isset($check)){ 
    $_SESSION['session_flash'] = $check['password'];
    header("Location: ../html/lupaPasswordResult.php");
}
else{ 
    echo '<script>alert("Username atau nama lengkap salah!");</script>';
    echo '<script>location.href="../html/lupaPassword.php";</script>'; 
} 
?>