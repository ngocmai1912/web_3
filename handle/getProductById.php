<?php
    include '../config.php';
    $id = $_POST['id'];
    $sql = "select * from product where id = '$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
    echo json_encode($row);
?>