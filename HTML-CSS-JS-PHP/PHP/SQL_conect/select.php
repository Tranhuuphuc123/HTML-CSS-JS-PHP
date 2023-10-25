<!-- thực hiện truy vấn select hiển thị dữ liệu -->
<?php
   $servername = "localhost";
   $username= "root";
   $password = "Huuphuc1995ct@";
   $db = "HuuphucDB";
   // tạo kết nối
   $conn =mysqli_connect($servername,$username,$password);

   if(!$conn){
    die("error!" . mysqli_error());
   }
   $sql = "select id, name, email,birth,address from Emloyee";
   mysqli_select_db($conn,"HuuphucDB");
   $retval =mysqli_query($conn,$sql);
   if(!$retval){
    die ("lỗi" . mysqli_error());
   }

   while(($row = mysqli_fetch_array($retval))){
    echo "Employee ID. : {$row["id"]}  <br> ".
    "name. : {$row["name"]}  <br> ".
    "Email. : {$row["email"]}  <br> ".
    "Birth. : {$row["birth"]}  <br> ".
    "Address. : {$row["address"]}  <br> ".
    "---------------------------------<br>";
   }

   echo "thành công";
   mysqli_close($conn);

?>