<!-- tiềm hiểu câu điều kiện rẽ nhánh -> chủ yếu là switch case -->
<?php
   $mang =[2,3,4,5,6,7,8];
   // lấy giá trị từng mảng
   $giatri =$mang[2];
   switch($giatri){
     case 2:
        echo 'thứ 2';
        break;
    case 3:
        echo 'thứ 3';
        break;
    case 4:
        echo 'thứ 4';
        break;     
    case 5:
        echo 'thứ 5';
        break; 
    case 6:
        echo 'thứ 6';
        break;
    case 7:
        echo 'thứ 7';
        break;
    case 8:
        echo 'chủ nhật';
        break;
    default:
        echo 'error!'   ;
        break;
}

?>


