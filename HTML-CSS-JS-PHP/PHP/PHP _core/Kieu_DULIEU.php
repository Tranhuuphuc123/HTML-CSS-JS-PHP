<?php

echo '============Kiểu số nguyên============ <br/>';

/* kiểu số nguyên*/
// khai báo(lưu ý trong php không có cần kèm kiểu dữ liệu trong khai báo biến)
  $songuyen = 10;

  $a = '10';
  // kiêm tra xem đó là kiểu dữ liệu gì
  var_dump($a);
  // ép kiểu int chuỗi a = '10' thành số nguyên là 10.
  $epkieu = (int)$a;
  echo($epkieu);
  // kiểm tra xem nó có phải là kiểu số nguyên không
   echo is_int($a) . "<br/>";
   echo is_int($epkieu) . ' là true tức là kiểu số nguyên <br>';
   if($epkieu==true){
    echo ' nó là kiểu số nguyên';
   }else{
     echo ' nó không phải là số nguyên';
   }



  /* ======================================================================== */
   echo '<br/>';
   echo '==============Kiểu số thực============ <br/>';
      $sothuc =10.2;
      echo var_dump($sothuc);

      // ép kiểu
      echo '<br>';
      $sothuc1 = '10';
      $epkieu_sothuc = (float)$sothuc1;
      echo 'số thực: ' . $epkieu_sothuc;
     
      // kiểm tra xem nó có phải là số thực
      $kiemtra_sothuc = is_float($epkieu_sothuc);
      echo '<br>';
      if($kiemtra_sothuc== true){
        echo 'nó là số thực';
      }else{
        echo 'nó không phải là số thực';
      }




   /* ======================================================================== */
   echo '<br/>';
   echo '==============Kiểu BOOLEAN============ <br/>';
   $b = true;
   // kiểm tra kiểu dl là gì?
   var_dump($b);

   // ép kiểu bool
   $c = 'true';
   $epkieu_bool = (bool)$c;
   echo $epkieu_bool . ' đây là kiểu bool đích thị <br>';

   // kiểm tra nó có phải là bool hay không
   echo is_bool($epkieu_bool) . ' nó đích thị là kiểu bool nha <br>';
   
   if($epkieu_bool == true){
    echo 'đây là kiểu bool';
   }else{
     echo 'error!';
   }


 
  /* ======================================================================== */
  echo '<br/>';
  echo '==============Kiểu String============ <br/>';
   $chuoi = 'huu phuc';
   echo $chuoi . '<br>';
   var_dump($chuoi);
   echo '<br>';

   // ép kiểu
   $chuoi1 = 10.2;
   $epkieu_chuoi = (string)$chuoi1;
   echo $epkieu_chuoi . var_dump($epkieu_chuoi) .'<br>';

   // kiểm tra kiểu string?
   $kiemtra_chuoi = is_string($epkieu_chuoi);
   if($kiemtra_chuoi == 1){
    echo 'đúng rồi nó là kiểu chuỗi';
   }else{
    echo 'no!';
   }
   


   /* ======================================================================== */
   echo '<br/>';
   echo '==============Kiểu mảng Array============ <br/>';  
   $mang = [1,2,3];
   echo '==in kiểu từng phần tử=== <br>';
   echo 'phàn tử thứ nhất: ' . $mang[0] . '<br>';
   echo 'phàn tử thứ hai: ' . $mang[1] . '<br>';
   echo 'phàn tử thứ ba: ' . $mang[2] . '<br>';

   // ép kiểu
   $mang2 ='1,2,3';
   $epkieu_mang = (array)$mang2;
   echo var_dump($epkieu_mang) . '<br>';

   // kiểm tra kiểu dữ liệu mảng?
   $text_mang = is_array($epkieu_mang);
   if($text_mang == true){
    echo 'nó là kiểu array';
   }else{
    echo 'Error!';
   }
   




?>