<!-- tiềm hiểu về các vòng lặp trong lặp trình PHP -->

<?php
  // bài tập về vòng lặp for
  echo '=============for================<br>';
   for($i=0;$i<100;$i++){
     if($i%2==0){
        echo $i . ' ';
     }
   }


   // vòng lặp do-while
   echo '<br/>';
   echo '=============do-while================<br>';
   $k = 0;
   do{
      echo $k . ' ';
      $k++;
   }while($k<10);


   // vòng lặp while
   echo '<br/>';
   echo '===============while==============<br>';
   $j = 0;
   while($j<10){
     echo $j . ' ';
     $j++;
   }

   // vòng lặp forr-each
   echo '<br/>';
   echo '===============for earch==============<br>';
   $arr = [1,2,3,4,5,6,7,8,9,10];
   // dùng foreach xuất từng phần tử mảng thay vị phải in ra từng mảng một thủ công
   foreach($arr as $item){
     echo $item . ' ';
   }

?>