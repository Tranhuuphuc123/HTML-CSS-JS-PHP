<!-- inssert databse trong php -->
<?php
   $servername = "localhost";
   $username= "root";
   $password = "Huuphuc1995ct@";
   $db = "HuuphucDB";
   // tạo kết nối
   $conn = new mysqli($servername,$username,$password,$db);
   // trường hợp kết nối lỗi
   if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
  }
 
  // create table 
  $sql = "create table Emloyee
   (
     id int unsigned auto_increment primary key,
     name varchar(30) not null,
     email varchar(30) not null,
     birth varchar(30) not null,
     Address varchar(40) not null
   )";

   if($conn->query($sql) == TRUE){
    echo "bảng được tạo thành công!";
   }else{
    echo "không khởi tạo dc table" . $conn
    ->error;
   }

   $conn->close();


?>