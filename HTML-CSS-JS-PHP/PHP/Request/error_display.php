<!-- thực hành thông báo lỗi -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiềm hiểu về thông báo lỗi trong php</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <!-- cod php -->
    <?php error_reporting(0);
       $nameErr = $pwordErr = $genderErr = $coptErr = "";
       $name = $pword = $gender = $comment = $copt ="";
       if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"])){
                $nameErr = "name is reqquired";
            }else{
                $name = sanitize_data($_POST["name"]);
            }

            if(empty($_POST["pword"])){
                $pwordErr ="Password is required";
            }else{
                $pwordErr = sanitize_data($_POST["pword"]);
            }

            if(empty($_POST["copt"])){
                $coptErr ="Company is Required";
            }else{
                $coptErr = sanitize_data($_POST["copt"]);
            }
            
            if(empty($_POST["comment"])){
                $comment ="";
            }else{
                $comment = sanitize_data($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr = "Gender is Required";
            }else{
                $genderErr = sanitize_data($_POST["gender"]);
            }
       }

       function sanitize_data($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars(($data));
         return $data;
       }
    ?>

    <form action="<?php echo $_SERVER["$PHP_SELF"] ?>" method="POST">
        <table>
            <tr>
                <td>Name: </td>
                <td>
                    <input type="text" name="name">
                    <span class="error">* <?php echo $nameErr; ?> </span>
                </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td>
                    <input type="pword" name="pass">
                    <span class="error">*<?php echo $pwordErr;  ?> </span>
                </td>
            </tr>
            <tr>
                <td>Company: </td>
                <td>
                    <input type="text" name="copt">
                    <span class="error">* <?php echo $coptErr;  ?> </span>
                </td>
            </tr>
            <tr>
                <td>Comment: </td>
                <td>
                    <textarea name="comment" cols="30" rows="10"></textarea>              
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    Gender &ensp; <input type="radio" name="gender"> &ensp; <span>Female</span>
                    <input type="radio" name="gender" > &ensp; Male &ensp; <input type="radio" name="gender"> &ensp; <span>Other</span>
                    <span class="error">* <?php echo $genderErr ?> </span>
                </td>           
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit"></td>
            </tr>
        </table>
    </form>

    <?php
      echo $name;
      echo "<br/>";

      echo $pword;
      echo "<br/>";

      echo $copt;
      echo "<br/>";

      echo $gender;
      echo "<br/>";
      
    ?>
</body>
</html>