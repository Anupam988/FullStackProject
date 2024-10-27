<?php
//ragister
if(isset($_POST['ragister'])){
    $userName= $_POST['userName'];
    $userEmail= $_POST['userEmail'];
    $userNumber= $_POST['userNumber'];
    $userPassowrd= $_POST['userPassword'];

    echo $userNumber;
    include "../config.php";



    

                        $dup_email = mysqli_query($con,"SELECT * FROM `user` WHERE useremail= '$userEmail' ");
                        $dup_username = mysqli_query($con,"SELECT * FROM `user` WHERE username= '$userName' ");

    if(mysqli_num_rows($dup_email)){

        echo "
        <script>
        alert('Email already taken');
        window.location.href='ragister.php';
        </script>
        ";
    }
    elseif(mysqli_num_rows($dup_username)){
        echo "
        <script>
        alert('username already taken');
        window.location.href='ragister.php';
        </script>
        ";
    }
    else{

        mysqli_query($con,"INSERT INTO `user`(`username`, `useremail`, `usernumber`, `password`) 
                        VALUES ('$userName','$userEmail',$userNumber,'$userPassowrd')");
        echo "
        <script>
        alert('ragister successfull');
        window.location.href='login.php';

        </script>
        ";
    }

    


}

//login

if(isset($_POST['login'])){

    $userName = $_POST['userName'];
    $password = $_POST['userPassword'];
    include "../config.php";
    $result = mysqli_query($con,"SELECT * FROM `user` WHERE (username = '$userName' OR useremail = '$userName') AND password = '$password'");
    
    session_start();


    if (mysqli_num_rows($result)){
        $_SESSION['user'] = $userName; 
        echo"
            <script>
        alert('Login successfull');
        window.location.href='../index.php';
        </script>
        ";
    }
    else {
        echo"
            <script>
        alert('invalid user name or passsword');
        window.location.href='./login.php';
        </script>
        ";
    }
}


?>