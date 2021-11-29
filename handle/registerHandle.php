<?php
    include '../config.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullName = $_POST['fullname'];
    $email = $_POST['email'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        $sql_insert = "INSERT INTO users (
            username,
            password,
            fullname,
            email
        )
        VALUE (
            '{$username}',
            '{$password}',
            '{$fullName}',
            '{$email}'
        )";
        $sql_check = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql_check);
       
        if (mysqli_num_rows($result) > 0) {
            header("Location: ../register.php?error=Tên tài khoản đã tồn tại!");
            exit();
        } else {
            $result = mysqli_query($conn, $sql_insert);
            if($result === TRUE){
                header("location: ../login.php");
            }
            else{
                header("Location: ../register.php?error=Vui lòng thử lại!");
            }
        }
    }
?>