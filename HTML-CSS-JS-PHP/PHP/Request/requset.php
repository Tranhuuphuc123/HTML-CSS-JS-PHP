<!-- tiềm hiểu về $_REQUEST Trong php
nó có chức năng là liên kết đến đg dẫn file chạy php.. thay vì gáng mạc định thông qua biến $_REQUEST
ta có thể liên kết dễ dàng mà không cần thay đỏi địa chỉ đg dẫn
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_REQUEST TRONG PHP</title>
</head>
<body>
    <!-- code php -->
    <?php
       error_reporting(0);
       if($_REQUEST["name"] || $_REQUEST["weight"]){
         echo "welcome: ". htmlspecialchars($_REQUEST["name"]). "<br />";
        /*  htmlspecialchars là hàm bảo mật thông tin php-> mã hóa các ký tự html
         giúp tránh cho người dùng tự ý chèn các ký tự hay chỉnh sữa nội dung
         */
         echo "you are: ". $_REQUEST['weight']. "kgs. ";
         exit();
       }
      ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <table>
            <tr>
                <td>
                    <span>Name: </span>
                </td>
                <td>
                    <input type="text" name="name" value="">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Weight: </span>
                </td>
                <td>
                    <input type="text" name="weight">
                </td>
            </tr>
            <tr>
              <td></td>
              <td>
                <input type="submit" name="submit">
              </td>
           </tr>
        </table>
    </form>

    


</body>
</html>