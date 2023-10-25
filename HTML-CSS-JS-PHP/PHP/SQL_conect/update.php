<!-- cách update cập nhật trong php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cách thức cập nhật cơ sỡ dữ liệu</title>
</head>
<body>
    <?php
      if(isset($_POST["update"])){
        $dbhost = "localhost";
        $username ="root";
        $password="Huuphuc1995ct@";
        $conn = mysqli_connect($dbhost,$username,$password);
        if(!$conn){
          die("kết nối không thành công " . mysqli_error());
        }
        $pasngr_id = filter_input(INPUT_POST, 'id');
        $email = filter_input(INPUT_POST, 'Email');
        $sql = "update passengers set  Email = '". $email. "'where id = $pasngr_id";
        mysqli_select_db($conn, "HuuphucDB");
        $retval = mysqli_query($conn,$sql);
        if(!$retval){
            die("cập nhật không thành công" . mysqli_error());
        }

        echo "cập nhật thành công \n";
        mysqli_close($conn);
      }
    ?>

    <form method="post" action= "<?php $_PHP_SELF ?>">
        <table width = "400" border="0" cellspacing ="1" cellpadding ="2">
            <tr>
                <td width = "100">passenger ID:</td>
                <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
                <td width = "100">Email:</td>
                <td><input type="text" name="Email" id="Email"></td>
            </tr>
            <tr>
                <td width = "100"></td>
                <td></td>
            </tr>
            <tr>
                <td width = "100"></td>
                <td><input type="submit" name="update" value="Update" id="update"></td>
            </tr>

        </table>
    </form>


    <!-- lưu ý name ="id/Email" là chỗ liên kết với các cột trên table của data -->
</body>
</html>