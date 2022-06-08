/* TÌM HIỂU VỀ CÁC KIỂU CHUỖI TRONG JAVASCRIPT */

// Cách khai báo kiểu chuỗi trong js bằng hai cách một cách thông thường và kiểu string

                // kiểu thông thường
                var fullName = 'kiểu khai báo thứ nhất'  // lưu ý kiểu này trong dấu '' hoặc "" đều đc
                console.log(fullName);
                // kiểu khai báo thứ hai
                var fullName2 = new String(" kiểu khai báo thứ hai");
                console.log(fullName2);

// ký tự thoát biến backslah
            var fullName3 = ' tôi tên là \'phúc\'';
            console.log(fullName3);

            var fullName4 = " tôi tên là 'Phúc' ";
            console.log(fullName4);

 /* tìm hiểu về các hàm thuộc tính treogn string */

 // thuộc tính find indexx tìm vị trí thứ tự trong một CHUỖI

 var ten ='trần hữu phúc 1400253'
 console.log(ten.indexOf('p'));
    //---> cú pháp indexOf() giúp ta tìm đc vị trí trong một chuỗi của thuộc tính find index


 // tìm kiếm trong chuỗi indexOf
  var ten1 = 'hu p hu p hu p'
  console.log(ten1.indexOf('p')); // tim vị trí p đầu tiên là vtri 3
  console.log(ten1.indexOf('p',5)) // tìm vị trí p thứ 2 là ở vtri  8
  console.log(ten1.lastIndexOf("p")); // tìm vtri p ở cúi cùng la vtri 13



 // cắt chuỗi trong js căt chữ hữu trong chuoi' tran huu phuc'
  var ten2 ='tran huu phuc';
  console.log(ten2.slice(4,8));// kết quả là chữ huu đc cắt.
  console.log(ten2.slice(4)); //cắt từ huu tới phuc
  console.log(ten2.slice(0)); // cắt hết chuỗi luôn

      // cắt theo chiều ngc lại từ phải qua trái
  console.log(ten2.slice(-4,-1));






// cách chèn thay thể trong js thuộc tính replace
   var ten3 = 'js' // muốn chèn js thành javascript
   console.log(ten3.replace('js', 'javasript'));
           //--> chèn javascript thay cho js.

    // chèn tất cả các từ js xuất hiện nhiều lần thì sao
    var ten4 = 'js js js js js js';
    console.log(ten4.replace(/js/g, 'javascript')); // /js/g phương thức chính quy thay thể tất cả ký tự cần chèn



// thuộc tính chuyển chữ in hoa toUpperCase
   var ten5 ='toi ten la abc';
   console.log(ten5.toUpperCase());// chuyển tất cả thành in hoa.
//thuộc tính in thường ToLowerCase()
   var ten6 = ' BIẾN ĐỔI THÀNH CHỮ THƯỜNG';
   console.log(ten6.toLowerCase());



// trim thuộc tính xử lý khoảng trắng nhập thừa từ người dùng
  var ten7 = '      huu phuc    '; // mỗi khoản trắng tính là 1 ký tự để xóa các khoản trắng thừa do người dùng nhập vào ta dùng trim
  console.log(ten7.trim());
  console.log(ten7.trim().length); /* dùng lenght để kiểm tra ro ràng hơn với các khoản trắng là trên 20 ký tự, nhưng có trim thì nó sẽ xóa
các khoảng trắng và chỉ tính các ký tự hiện hữu*/




// thuộc tính split chuyển chuỗi thành mảng aray
  var chuoi = 'mảng 1, mảng 2, mảng 3'; // có dấu hiệu chugn là dấu ",".
  console.log(chuoi.split(','));


// thuộc tính lấy ký tự trong chuỗi
 var layKyTu = 'lay ký tự bằng charAt';
 console.log(layKyTu.charAt(7));

    