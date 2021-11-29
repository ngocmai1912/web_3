<?php
    include '../config.php';

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "insert into customer(fullname, address, phone)
        values('$name', '$address','$phone')";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        return "Thêm mới thành công";
    }
    else{
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>