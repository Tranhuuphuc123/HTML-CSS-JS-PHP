<!--insert database vào table-->
<?php
   $servername = "localhost";
   $username= "root";
   $password = "Huuphuc1995ct@";
   $db = "HuuphucDB";
   // tạo kết nối
   $conn = mysqli_connect($servername,$username,$password);
   // trường hợp kết nối lỗi
   if(!$conn){
    die("lỗi vui lòng kiểm tra lại kết nối: " . mysqli_error());
   }

   $sql = "insert into Emloyee(id,name, email, birth, address)" . 
   "values(101,'phúc','phuc@gmail.com','2023-02-02','cantho')";

   mysqli_select_db($conn,"HuuphucDB");
   $retval = mysqli_query($conn,$sql);
   if(! $retval){
    die("loi: " . mysqli_error());
   }

   echo "tạo thêm dữ thành công";
   mysqli_close($conn);
     


?>