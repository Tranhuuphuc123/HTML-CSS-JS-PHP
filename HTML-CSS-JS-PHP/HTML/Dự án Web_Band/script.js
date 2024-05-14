/*******xử lý Js cho web the band********************* */

// tạo mã chung get element
const $ = document.querySelector.bind(document)
const $$ = document.querySelectorAll.bind(document)


// get element của button buy tickets
const buyTickets_btn = $$('.js-tickets-btn') 
// get element modal
const modal = $('.js-modal')
// get element nút close
const x = $('.js-close')
// get element modal-container
const modalContainer = $('.js-modal-container')




/*Mảng trên getElementAll nên nó nó lấy ra một NodeList gồm cả 3 btn một lượt
=> ta dùng for of để lấy value đại diện cho từng btn riêng lẻ thay vì là tất
cả một lươt
=> for of là tính chất vòng lặp lấy ra value của mảng, object trong Js
---> tóm lại QuerySelectorAll là một mảng tập hợp các class cùng tên nên dùng for
để lặp qua từng trường hơp, từng nút một */
for (const btn_ticket of buyTickets_btn) {
    // lắng nghe sự kiện từng nút nè
    btn_ticket.onclick = () => {
        modal.classList.add('open-modal')  
    }

    x.onclick = () => {
        modal.classList.remove('open-modal') 
    }

    /* xử lý sự kiện khi nhấn vào vùng trống thì lặp tức nguyên modal hộp thoại modal tickets nó sẽ ẩn 
    mà hông cần nhấn dấu x*/
    modal.onclick = () => {
        modal.classList.remove('open-modal') 
    }

    /*tạo xử lý ngăn sự kiện nổi bọt -> nghĩa là khi modal đc onclick dẫn đến hệ quả
    -> là khi nhấp bất kỳ cái tp nào trong hộp thoại modal tickets nó cũng bắt sự kiện
    modal.onclik làm cho hộp thoại bị tắt 
    -> giả dụ mún nhập thông tin thì khồng làm đc nữa(đây là sự kiện nổi bọt trong Js)
    <==> để khăc phục ta */
    modalContainer.onclick = (e) => {
        // thuộc tính stopPropagation giúp ngăn sự kiện nổi bọt gây ảnh hưởng hiểu ứng lên toàn hộp thoại modal tickets
        e.stopPropagation()
    }
}
