<?php
    include '../config.php';

    $name = $_POST['name'];
    $image = $_POST['image'];
    $importPrice = $_POST['importPrice'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $type = $_POST['type'];

    $sql = "insert into product(name, importPrice, price, type, quantity, image) 
    VALUES ('$name','$importPrice','$price','$type','$quantity','$image')";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        return "Thêm mới thành công";
    }
    else{
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>