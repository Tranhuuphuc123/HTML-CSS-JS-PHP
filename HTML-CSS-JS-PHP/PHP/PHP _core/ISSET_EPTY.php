<!-- hàm kiểm tra tồn tại hay trống? isset và empty -->
<?php

  if(isset($bien1)){
    echo $bien1;

  }else{
     $bien1 = 'Hello tao nè' ;
     echo $bien1;
  }
 

    echo '<br>';

    $bien2 = 0;
    if(empty($bien2)){
        echo 'biến này rỗng';
    }else{
       echo 'biến này không rỗng <br>';
       echo $bien2;
    }

  echo '<br>';
  $arr = [1,2,'a'];
  print_r($arr);

  echo '<br>';
  array_push($arr,'b');
  print_r($arr);
  echo $arr[3];
 
?>