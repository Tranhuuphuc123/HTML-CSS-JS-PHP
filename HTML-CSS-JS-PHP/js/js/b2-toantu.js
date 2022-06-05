/*toán tử số học + / * -...*/ 
    // khai báo biến
    var a = 5;
    var b = 9;
    var tong = a + b;
    var tich = a*b;
    var luythua =  a;
    a++;
    b--;


    console.log(tong);
    console.log(tich);
    console.log(luythua);
    console.log(a);
    console.warn(b);

/*toán tử gán*/
  var x = 7;
  var y = 7;
  x += 2;
  y -= 4;
   console.log(x);
   console.log(y);

/*toán tử nói chũôi*/
var ho = 'Trần';
var dem = 'Hữu';
var name = 'Phúc';
name += ' Nguyễn'
console.log(ho + ' ' + dem + ' ' + name);
console.log(name);


/*toán tử so sánh*/

var a = 5;
var b = 6;

if(a==b){
  console.log('diều kiện đúng');
}else{
  console.log( ' do '+ a + ' # '+ b +' nên điều kiện sai');
}

if(a==5){
  console.log('a = '+ 5 + ' kết quả chính xác nha ');
}


/* giá tị truê false trong toán tử boolean thật ra thường đg dùng rất nhiều nhất là các phép toán so sánh điều kiện*/ 

var a=1;
var b=2;

var soSanh=a>b;
console.log(soSanh);
 // do a không lớn hơn b nên kết quả là false.




/* toán tử logical điều kiện liên kết*/

var a=1;
var b=2;

if( a>0 && b>0 ){
  console.log(" điều kiện đúng nhá");
}else{
  console.log(" điều kiện sai nha");

}

 // toán tử phủ định lại từ a<0 thành a>0
if(!(a<0)){
  console.log("điều kiện đúng a> 0 do toán tử phủ định !");
}else{
  console.log(" điều kiện sai nhá");
}



