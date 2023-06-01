
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- đoạn thực thi php với Get-->
     <form action="name_Get.php" method="get">
       Name: <input type="text"  name="uname"><br><br>
       <input type="submit" value="Submit">
    </form>

    <span>Welcome: </span> &ensp;
    <?php
        error_reporting(0);
        echo $_GET["uname"];
    ?>
</body>
</html>
    
