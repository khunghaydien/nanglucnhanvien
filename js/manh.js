$(".js_thanhvien").click(function() {
    $(".show_thanhvien").show();
});
$(".phieudanhgia .js_thanhvien").click(function() {
    $(".show_thanhvien").show();
    $(".text_js").text("Người đánh giá");
});
$(".js_menu_curd").click(function() {
    $(".show_menu_curd").toggle();
})
$(".x_close").click(function() {
    $(".show_thanhvien").hide();
    $(".show_chinhsuachucvu").hide();
    $(".show_themyccv").hide();
    $(".show_xacnhan").hide();
});

function hienpopup(tenid) {
    $("." + tenid).show();
}
$(".js_anbot").click(function() {
    $(".show_js_anbot").hide();
    $(".js_chitiet").removeClass("hidden");
    $(".js_anbot").addClass("hidden");
    $(".js_nx_ct").addClass("br-10");


});
$(".js_chitiet").click(function() {
    $(".show_js_anbot").show();
    $(".js_chitiet").addClass("hidden");
    $(".js_anbot").removeClass("hidden");
    $(".js_nx_ct").removeClass("br-10");
});