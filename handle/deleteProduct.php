<?php 
    include '../config.php';
    $id = $_POST['id'];

    $sql = "delete from product where id = '$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        return "Xóa thành công!";
    }
    else{
        return "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>