<?php

include '../config.php';
$id=intval($_GET['ID']);
mysqli_query($con,"DELETE FROM `products` WHERE pid=$id");
header("location:../list.php");
?>