<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luyện tập</title>
</head>
<body>  
    <!-- đoạn thực thi php với Post-->
     <form action="Login_Post.php" method="post">
       Name: <input type="text"  name="uname"><br><br>
       Password: <input type="text" name="pword"><br><br>
       <input type="submit" value="Submit">
    </form><br><br>
  

    <!-- code php xử lý-->
    
    <!-- xử lý cod php cho phươn thức Post -->
    Welcome: 
    <?php 
      // tránh lỗi lần đầu chạy chương trình
        error_reporting(0);
        echo $_POST["uname"];
     ?><br><br>

    your Password: 
    <?php
        error_reporting(0);
        echo $_POST["pword"];
     ?>
    
</body>
</html>