<!-- thự hành kết nối sql trong php -->
<?php
   $servername = "localhost";
   $username= "root";
   $password = "Huuphuc1995ct@";
   // tạo kết nối
   $conn = new mysqli($servername,$username,$password);
    // trường hợp kết nối lỗi
    if($conn->connect_error){
        die("connection failed: " . $conn->connect_error);
    }

    // tạo database
    $sql = "create database HuuphucDB";
    if($conn->query($sql) == TRUE){
        echo "bạn đã tạo database thành công";
    }else{
        echo "bạn không thành công tạo database" . $conn->error;
    }


    // drop database
   
    $conn->close();
?>