var a = 100;
var b ='100';

// dùng toán tử so sánh tuyệt đối
 console.log(a===b);



 // toán tử !===

 console.log(a!=b); // sẽ ra kw false lý do phép toán ss != chỉ ss giá trị nên nhìn vào cách khai báo nó sẽ hiểu lầm 100 vs '100' bằng nhau
 console.log(a!==b);// kq true vì nó xét tới kiểu dữ liệu 1 là number 100 và string '100' nên a # b là đúng