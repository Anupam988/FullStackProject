<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm payment</title>
</head>
<body>
<?php include "./header.php";
    if(isset($_POST['payment'])){
        $Total = $_POST['totalbill'];
    }
    ?>
    <h1 class="" style="margin-top: 100px;"><?php echo $Total; ?></h1>
</body>
</html>