<?php
  // đặt tên biến
  $a =10;
  $b = 10.5;
  $c = 'Hữu phúc';

  // output xuất thông tin
  echo '--------thông tin----------<br/>';
  echo $a . '<br>';     // dấu dot: ."<br>"/ ."\n"  -> là xuống dòng
  echo $b . '<br>';
  echo $c . '<br>';

 // var_dump kiểm tra kiểu dữ liệu 
  echo '<br>';
  var_dump($a) ;
  echo '<br>';
  var_dump($b);
  echo '<br>';


  // in mảng array và object trong PHP
  $arr = [1,2,3,4];
  print_r($arr);
  //--> echo không in đc mảng


?>