<?php

if(isset($_POST['login'])){
    $user_name = $_POST['name'];
    $user_password = $_POST['Password'];

    include "../admin/config.php";
    $result = mysqli_query($con, "SELECT * FROM `admin` WHERE username='$user_name' AND password='$user_password'");

    session_start();

    if(mysqli_num_rows($result)) {
        $_SESSION['admin'] = $user_name;
        echo "
        <script>
        window.location.href = '../admin/header.php';
        </script>
        ";
    } else {
        // If no match is found, show an error message
        echo "
        <script>
        alert('Invalid Username/Password');
        window.location.href = './login.php';
        </script>
        ";
    }
}
?>
