// chức năng click to scroll

(function(w) {
    w.addEventListener('load', function() {
        const btn_left = document.getElementById('turn_left'),
            btn_right = document.getElementById('turn_right'),
            content = document.getElementById('bang_chung');
        const content_scroll_width = content.scrollWidth;
        let content_scoll_left = content.scrollLeft;
        btn_right.addEventListener('click', () => {
            content_scoll_left += 100;
            if (content_scoll_left >= content_scroll_width) {
                content_scoll_left = content_scroll_width;
            }
            content.scrollLeft = content_scoll_left;
        });
        btn_left.addEventListener('click', () => {
            content_scoll_left -= 100;
            if (content_scoll_left <= 0) {
                content_scoll_left = 0;
            }
            content.scrollLeft = content_scoll_left;
        });
    });
})(window);

$(".class_li_side_bar").click(function() {
    $(this).parents(".sidebar_item_kep").find(".sidebar_sub").toggleClass("active");
})

$('.close_popup').click(function() {
    $('.popup').hide();
})
$('.chon_soluong').click(function() {
    $('.modal_ql_soluong').toggle();
})

// $('input[type="radio"]').click(function() {
//     if ($(this).val() == "macdinh") {
//         $('.phanloai_danhgia_macdinh').show();
//         $('.phanloai_danhgia_khac').hide();
//     } else {
//         $('.phanloai_danhgia_macdinh').hide();
//         $('.phanloai_danhgia_khac').show();
//     }
// })

$('.btn_them_tuychon').click(function() {
    var id = Number($(this).attr('data-id'));
    $(this).parents('.form_group').find('.tuychon').append('<div class="container_tuychon container_tuychon' + id + ' "> <div class = "tuychon_header width_100 d_flex space_b align_c" ><div class = "tuychon_input d_flex width_70  mr_20" ><input type = "radio" value = "Tùy chọn ' + id + ' " name = "tuychon" class = "mr_10 " ><p class = "ten_tuychon" > Tùy chọn ' + id + ' </p> </div> <div class = "them_anh width_30" ><div class = "btn_them_anh btn_them_anhtuychon item d_flex mr_20" ><div class = "img mr_5" ><img src = "../img/hoi_7.png" alt = "Tải ảnh" ></div> <p > Thêm ảnh </p> </div> </div> </div> </div>');
    $(this).attr('data-id', id + 1);
})
$('.btn_them_anhtuychon').click(function() {
    $(this).removeClass('btn_them_anhtuychon');
    $(this).parents('.tuychon').find('.container_img').append('<div class="tuychon_img"> <div class = "img_anh_tuychon" ><div class = "form_group" > <input type = "file" name = "anh" class = "anh_tailen" ><div class = "container_anh container_anh_1"><div class = "item_anh item_anh_1" ><div class = "img_anh_tailen img_anh_tailen_1" ><img src = ""alt = "Ảnh tải lên" ></div> <div class = "xoa_anh d_flex" ><div class = "img mr_5" > <img src = "../img/hoi_10.png" alt = "Xóa ảnh"> </div> <p class = "font_s14 color_red"> Xóa </p> </div> </div> </div> </div> </div> </div>');
})

// end dùng chung
$('.btn_loaihoi').click(function() {
    $(this).each(function() {
        $('.sub_loaihoi').toggle()
    })
})

$('.btn_tuychinh').click(function() {
    $(this).parents('.content_c').find('.sub_tuychinh').toggle()
})

$('.show_de').click(function() {
    $(this).parents('.container_cum_de').find('.hoi_dap').toggle()
})

var chon_trangthai = $('.chon_trangthai');
var modal_ql_tieuchi_danhgia = $('.modal_ql_tieuchi_danhgia');

chon_trangthai.click(function() {
    modal_ql_tieuchi_danhgia.toggle();
})

var input_block = $('.form_group_block input')
input_block.attr('disabled', true);

$(window).click(function(e) {
    if (!chon_trangthai.is(e.target) && chon_trangthai.has(e.target).length == 0 &&
        !modal_ql_tieuchi_danhgia.is(e.target) && modal_ql_tieuchi_danhgia.has(e.target).length == 0) {
        modal_ql_tieuchi_danhgia.hide();
    }
    if (!$('.chon_soluong').is(e.target) && $('.chon_soluong').has(e.target).length == 0 && !$('.modal_ql_soluong').is(e.target) && $('.modal_ql_soluong').has(e.target).length == 0) {
        $('.modal_ql_soluong').hide();
    }
    if (!$('.btn_loaihoi').is(e.target) && $('.btn_loaihoi').has(e.target).length == 0 && !$('.sub_loaihoi').is(e.target) && $('.sub_loaihoi').has(e.target).length == 0) {
        $('.sub_loaihoi').hide();
    }
    if ($(e.target).is('.popup_xoa')) {
        $('.popup_xoa').hide();
    }
    if ($(e.target).is('.popup_duyet')) {
        $('.popup_duyet').hide();
    }
    if ($(e.target).is('.popup_tuchoi')) {
        $('.popup_tuchoi').hide();
    }
})