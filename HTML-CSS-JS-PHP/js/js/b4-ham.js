/* function hàm số trong javascript*/ 

// truyền tham số

function kiemTra(text){
    console.log(text);
}

kiemTra("đây là cách truyền tham số");


// truyền nhiều hơn một tham số

function kiemTra2 ( met1, met2){
    console.log(met1);
    console.log(met2);
}
 kiemTra2( " tham số thứ nhất", " tham số thứ hai");




// cách truyền một đối tượng Arguments để thay thế cho nhiều tham số cần truyền vào


function kiemTra3 (){
    console.log(arguments);
}
kiemTra3("giá trị lần 1", "giá trị lần 2", "giá trị lần 3");
// hàm sẽ in ra 3 giá trị mà không cần khai báo tên tham số tương ứng


// hàm for of

function kiemTra4(){
    var huuPhuc;
    var noiTu ='';
    for( huuPhuc of arguments){
        noiTu += `${huuPhuc} - `
    }
    console.log(noiTu);
}
kiemTra4('lần 1', 'lần 2', 'lần 3');



// từ khóa return trong hàm

            function phepCong(a, b){
                var tong = a+b;
                console.log(tong);
                 return tong;
            }
            phepCong(7,6);
// hoặc có thể viết

      function phepTru(a, b){
          var hieu = a-b;
          return hieu;
      }
       console.log(phepTru(13,5));
