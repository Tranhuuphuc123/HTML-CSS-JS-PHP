<!-- tạo function -->

<?php

 // tạo function
 function total($a, $b){
    return $a+$b;
 }


 // gọi hàm và thực thi
 echo 'tong: ' . total(4,5) . '<br>';


 $bien1 = 4;
 $bien2 = 5;

 echo 'tong '. $bien1 . '+' . $bien2 . ' = ' . total($bien1,$bien2);


 // tiến hành kiểm tra xem hàm Sum có được định nghĩa chưa nếu chưa thì định nghĩa cho nó
 if(function_exists('Sum')){
    function Sum($a, $b){
        return $a+$b;
    }
 }

?>