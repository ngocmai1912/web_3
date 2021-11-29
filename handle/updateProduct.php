<?php
    include '../config.php';

    $name = $_POST['name'];
    $image = $_POST['image'];
    $importPrice = $_POST['importPrice'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];

    $sql = "update product set name = '$name', importPrice = '$importPrice', price = '$price'
        , quantity = '$quantity', image = '$image'";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        return "Cập nhật thành công!";
    }
    else{
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>