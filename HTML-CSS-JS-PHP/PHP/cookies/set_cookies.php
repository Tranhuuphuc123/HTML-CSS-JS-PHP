<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set cookies</title>
    <?php
      setcookie("name","Huu phuc", time()+1800,"/","",0);
      setcookie("city","Cantho", time()+1800,"/","",0);
      setcookie("name","Huu phuc",time()+86400,"/","",0);
    ?>
</head>
<body>
    <?php 
    echo "cookies have been set ";
    echo $_COOKIE["name"]."<br/>"; 
    ?>
</body>
</html>