<!-- tiềm hiểu về đệ quy trong php -->

<?php
 



// bài tập để quy vòng lặp: in ra từ n -> 0
 function printvalue($a){
    if($a == 0){
        return $a;
    }
    echo $a . ' ';
    printvalue($a-1);
 }

  printvalue(5);
  echo '<br>';




 // bài tập đệ quy tính tổng
  function Sum($n){
     // điểm neo
     if($n==1){
        return 1;
     }
     return $n + Sum($n-1);
  }


  $temp = Sum(5);

  echo 'tong = ' . $temp;

  ?>



