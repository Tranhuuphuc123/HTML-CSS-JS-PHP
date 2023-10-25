// xây dựng biến
var a =10;
var hack = 'alo 123 tao là đại ca';
// hàm alert xuất thông báo bằng hộp thoại hiển thị trên web
alert(hack);
document.write(hack);

/* hàm chạy thông báo console chạy thông báo console trên web bấm f12 mở tab console để text*/
            //.log();
            console.log('hiển thị cơi bản trong js');// giá trị truyền vào kiểu dữ lệu string
            console.log(100); // giá trị truyền vào kiểu int
            console.log(['Html','CSS','JS']);// giá trị truyền vào kiểu array
            console.log(true);  // truyền kiểu boolean
            console.log({name:"Phúc", job:"student"}) // truyển kiểu dữ liệu object đối tường bỏ trong {}
            console.log(hack); // cách tham chiếu object từ biến khai báo bên ngoài ( biến tên "hack" tự xây dựng)



            //console.warn & console.error; hiển thị nút cảnh báo bên canh các truy xuất ( hiển thị biểu tưởng cảnh báo tam giác bàng và x đỏ )
            console.warn('dừng truy cập'); // hiển thị nút tam giác chấm thna vàng cảnh báo
            console.error('nguy hiểm nha'); // cảnh báo dấu x ddoorr cảnh báo bên cạnh nội dung truy xuất.


            // hàm console.assert(): giống .log() tuy nhiên hàm truy xuất ra dữ liệu này  phụ thuộc vào giá trị true false
             console.assert(true, ['HTML', 'CSS', 'suntech.edu.vn']);  // giá trị true không đc in ra
             console.assert(false, ['HTML', 'CSS', 'suntech.edu.vn']); // giá trị false truyền vào đc in ra


            //console.count(): cho phép đếm số lần mà hàm đc gọi.
            function ping() {
                console.count()
                }
                //Chúng ta thực hiện gọi hàm ping() như sau

                ping() // call lần 1
                ping() // call lần 2
                ping() // call lần 3
                ping() // call lần 4
                ping() // call lần 5

                //Sau đó các bạn chạy-->  Kết quả: sẽ hiển thị ra 6 dòng vì mỗi lần hiển thị nó sẽ tự dộng count đếm và cộng thêm 1
                console.count()

            
            // tạo bảng hiển thị console.table()
               // tạo biến
                var person = {
                    firstName: 'Phúc',
                    lastName: 'Trần',
                    website: 'Aptech.edu.vn'
                }
                

                // lôi biến vào để chạy
                function test() {
                    console.table(person);
                }

                test() // Run test function
/* hàm confirm hiển thị xác nhận trước khi muốn làm việc gì đó đảm bảo tránh sai lầm khi thực thi như xóa ảnh hay thoát khỏi web mà quên lưu*/
 
        confirm(" bạn có chắc mún thoát khỏi trang web");


/* hàm promt hiện yêu cầu nhập thông tin trong js*/ 
        prompt('yêu cầu nhập thông tin');

               
                                      

/* setTimeout đặt thời gian chạy chương trình thực thi */
                    // function  chaythu(){
                    //     alert("chạy sau 1s");
                    // }

                    // setTimeout(chaythu, 1000);
            setTimeout(()=>alert("chạy sau 1s"),1000);



/*hàm setInterval() hàm này sẽ thường được sử dụng để thiết lập độ trễ cho các hàm sẽ được thực hiện lặp lại như là hiệu ứng.*/ 
        // function laplai(){
        //     alert("chạy cứ sau 1s chạy 1 lần");
        // }

        //  setInterval(laplai,2000);