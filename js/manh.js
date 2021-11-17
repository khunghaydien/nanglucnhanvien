
$(".js_thanhvien").click(function() {
    $(".show_thanhvien").show();
});
$(".phieudanhgia .js_thanhvien").click(function() {
    $(".show_thanhvien").show();
    $(".text_js").text("Người đánh giá");
});
$(".js_menu_curd").click(function() {
    $(".show_menu_curd").toggle();
});
$(".js_menu_curd2").click(function() {
    $(".show_menu_curd2").toggle();
});
$(".x_close").click(function() {
    $(".show_thanhvien").hide();
    $(".show_chinhsuachucvu").hide();
    $(".show_themyccv").hide();
    $(".show_xacnhan").hide();
});
$(".x_close").click(function(){
    $(".popup").addClass("hidden");
    $(".popup").removeClass("flex");
});
$(".close").click(function(){
    $(".popup").addClass("hidden");
    $(".popup").removeClass("flex");
});
$(".close_xacnhan").click(function(){
    $(".popup_xacnhan").addClass("hidden");
    $(".popup_xacnhan").removeClass("flex");
});
function hienpopup(tenclass) {
    $("." + tenclass).show();
};
function hienpopupid(tenid) {
    $("#" + tenid).removeClass("hidden");
};
$(".js_anbot").click(function() {
    $(".show_js_anbot").slideToggle("slow");
    $(".js_chitiet").removeClass("hidden");
    $(".js_anbot").addClass("hidden");
    $(".js_nx_ct").addClass("br-10");
});
$(".js_chitiet").click(function() {
    $(".show_js_anbot").slideToggle("slow");
    $(".js_chitiet").addClass("hidden");
    $(".js_anbot").removeClass("hidden");
    $(".js_nx_ct").removeClass("br-10");
});

$(document).mouseup(function(e) 
{
    var container1 = $(".js_menu_curd2");
    var container = $(".js_menu_curd");
    if (!container.is(e.target) && container.has(e.target).length === 0 && !container1.is(e.target) && container1.has(e.target).length === 0 ) 
    {
        $(".show_menu_curd").hide();
        $(".show_menu_curd2").hide();
    }
});

$('.themmoiphanloai').click(function() {
    $(this).parents('.mkhoiphanloai').find('.khoiphanloai').append('<div class="khoiphanloaicon"><div class="khoiphanloaiconcon flex  space bot-15 "><div class="div145"><p class="chuden font-medium size-15 bot-5">Từ <span class="chudo">*</span></p><div class="border_input text"><input type="number" placeholder="Nhập số điểm" class="size-14 chuden"></div> </div><div class="div145"><p class="chuden font-medium size-15 bot-5">Đến <span class="chudo">*</span></p><div class="border_input text"><input type="number" placeholder="Nhập số điểm" class="size-14 chuden"></div> </div><div class="div145"><p class="chuden font-medium size-15 bot-5">Loại <span class="chudo">*</span></p><div class="select_no_muti "><select name="" id="" class="js_select_2"><option value="">Chọn loại</option><option value="">Yếu</option><option value="">Trung bình</option><option value="">Khá</option><option value="">Giỏi</option><option value="">Xuát sắc</option></select></div> </div><div class="div145 xoaphanloai c-pointer" onmouseup="xoa_phanloai()">Xóa</div></div></div>');
    $('.js_select_2').select2();
});

function xoa_phanloai() {
    $('.xoaphanloai').click(function() {
    $(this).parents('.khoiphanloaicon').find('.khoiphanloaiconcon').remove();
});
};
$('.xoaphanloai').click(function() {
    $(this).parents('.khoiphanloaicon').find('.khoiphanloaiconcon').remove();
});