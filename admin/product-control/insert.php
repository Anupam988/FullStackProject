<?php

if(isset($_POST['upload'])){

    $product_name=$_POST['Pname'];
    $product_price=$_POST['Pprice'];
    $product_category=$_POST['pcategory'];
    $product_image= $_FILES['Pimg'];
    $image_location=$_FILES['Pimg']['tmp_name'];
    $image_name=$_FILES['Pimg']['name'];
    $image_dest = "product_img/".$image_name;
    move_uploaded_file($image_location,$image_dest);

    include"../config.php";
    mysqli_query($con,"INSERT INTO `products`(`Pname`, `Pprice`, `Pimage`, `Pcategory`)
                         VALUES ('$product_name','$product_price','$image_dest','$product_category')");

    header("location:../list.php");

    
    


}

?>


