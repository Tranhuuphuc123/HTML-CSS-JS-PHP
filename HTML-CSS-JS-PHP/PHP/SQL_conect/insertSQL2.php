<!-- sử dụng tính chất hướng đối tượng insert lần 2 
khi insert không cần bỏ thêm id vào vì có thuộc tính tự tăng
-->

<?php
  $servername = "localhost";
  $username= "root";
  $password = "Huuphuc1995ct@";
  $db = "HuuphucDB";
  // tạo kết nối
  $conn = new mysqli($servername,$username,$password,$db);
  // trường hợp kết nối lỗi
  if($conn->connect_error){
   die("lỗi vui lòng kiểm tra lại kết nối: " . $conn->connect_error);
  }

  $sql = "insert into Emloyee(name,email,birth,address)" .  
  "values('tuấn','tuan@gmail.com','2000-02-03','Vĩnh Long')";

  if($conn->query($sql)===TRUE){
    echo "thành công";
  }else{
    echo "lỗi: " . $sql . "<br/>" . $conn->error;
  }

  $conn->close();
?>