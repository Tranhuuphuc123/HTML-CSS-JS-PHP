/* các xây dựng một hàm function đơn giản*/


        // xây dựng trực tiếp hàm
                function hamCoBan(){
                    alert(" ví dụ về hàm function đầu tiên");
                }

                hamCoBan();

        // hoặc thể viết thông qua cách khai báo biến --lưu ý là function là một hàm đc người dungfg tự xây dựng


                var ham = function(){
                    alert(" a nhô nha");
                }

                ham();
                

        // kiểu dữ liệu Object( object thì hàm có sẵn trong js)

        var myObject = {
            name: 'Phúc', age: 18, adress: 'cần thơ', diachi: 'tp. hcm'
            // tên key như name, adress, diachi.. do mình tự định nghĩa đều đc
        
        }

        console.log('object của tôi: ',myObject);


         //kiểu mảng Array với dấu [], nơi lưu trữ nhiều giá trị khác objeck là không cần định nghĩa key phía trc value
          //ví dụ không cần định nghĩa key (name: hữu phúc)  mà chỉ cần khai báo 'hữu phúc' trực tiếp luôn 

        var mangCon = ['hữu phúc', 'mssv: 1400253', 'độc thân'];
        console.log(mangCon);



        // hàm kiểm tra kiểu dữ liệu đang dùng là gì?

          var a =100;
          console.log( 'kiểu dữ liệu la: ' + typeof  myObject);
          console.log( 'kiểu dữ liệu la: '+ typeof  a);