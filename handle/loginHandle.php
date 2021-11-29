<?php
    include '../config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $sql = $sql = "select * from users where username = '$username' and password = '$password' ";
        
        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) == 0) {
            header("Location: ../login.php?error=Sai tên tài khoản hoặc mật khẩu!");
            exit();
        } else {
            $data = mysqli_fetch_array($result);
            session_start();
            $_SESSION["userID"] = $data['id'];
            $_SESSION["fullname"] = $data['fullname'];
            header("Location: ../admin/admin.php");
        }
    }
?>