<?php

include '../API/db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /html/login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="stylesheet" href="../assets/stylelogin.css" />
</head>

<style>
    .profile-item img {
        width: 100px;
        height: 100px;
    }

    .containerlogin {
        height: 650px;
    }

    .container-profile {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .profile-item {
        display: flex;
        justify-content: start;
        align-items: center;
        margin-top: 3.1rem;
        background-color: #333333;
        border-radius: 10px;
        width: 250px;
    }

    .profile-item p {
        margin-left: 1.4rem;
    }

    .button-profile {
        padding: 8px 0px;
        border-radius: 14px;
        width: 80%;
        background-color: #4149df;
        color: white;
        margin-bottom: 52px;
        border: 0px;
        margin-top: 2rem;
    }

    .button-profile:hover {
        background-color: hsl(237, 72%, 62%);
        transition: all ease 0.3s;
        cursor: pointer;
    }

    .modal {
        transition: all 0.3s;
        transform: translateY(-150%);
        /* display: none; Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        display: flex;
        background-color: #333333;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 20%;
        margin-top: 15%;
        border-radius: 30px;
    }

    .modal.active {
        transform: translateY(0%);
    }

    .modal-content p {
        color: black;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .footer-bottom p {
        color: grey;
    }

    form {
        display: flex;
        flex-direction: column;
        margin-left: 4rem;
    }
</style>


<body>
    <div class="mainlogin">
        <div class="darkbg"></div>
        <div class="containerlogin">
            <h1>Pilih Profile</h1>
            <hr>
            <div class="container-profile">
                <div class="profile-item">
                    <img src="../assets/image/alif.png" alt="profile1" />
                    <p>Profile 1</p>
                </div>
                <div class="profile-item">
                    <img src="../assets/image/bagus.png" alt="profile2" />
                    <p>Profile 2</p>
                </div>
                <div class="profile-item">
                    <img src="../assets/image/faja.png" alt="profile3" />
                    <p>Profile 3</p>
                </div>
            </div>
            <button class="button-profile" onclick="showModal()" id="myButton">Add Profile</button>
            <div id="myModal" class="modal">
                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <div class="form-modal">
                        <form method="post">
                            <input style="width: 200px;" type="text" name="nama_profile" id="" placeholder="Nama Profile">
                            <input style="width: 200px; background-color: #4149df; cursor: pointer;" type="submit" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="../scripts/profile.js"></script>
</body>

</html>