<?php 
    include '../config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "update customer set fullname = '$name', phone = '$phone', address = '$address' where id = '$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        return "Cập nhật thành công!";
    }
    else{
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>