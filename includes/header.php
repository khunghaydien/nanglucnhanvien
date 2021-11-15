<div class="header">
    <div class="nav">
        <div class="logo">
            <img src="../img/logo.png" alt="Logo">
        </div>
        <div class="menu">
            <ul class="menu-ul">
                <li class="menu-li "><a class="amneu amneu1 " href="">Trang chủ</a></li>
                <li class="menu-li"><a class="amneu amneu2 " href="">Sản phẩm</a></li>
                <li class="menu-li"><a class="amneu amneu3" href="">Hệ sinh thái</a></li>
                <li class="menu-li"><a class="amneu amneu4" href="">Công ty</a></li>
                <li class="menu-li"><a class="amneu" href="">Tin tức</a></li>
            </ul>
            <div class="login-sign_in">
                <div class="login">Đăng ký</div>
                <p class="quota">/</p>
                <div class="singn-in"><a href="/trang_chu_sau_dang_nhap.html" class="font_ss16 font_wB color_w">Đăng
                        nhập(demo)</a> </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
var somenu_tdn = $('.js-drop-menu1024');
$('.js-drop-menu1024').click(function() {
    $('.js-show-menu1024').slideToggle(300);
})
var menu = $('.js-show-menu1024');
$(window).click(function(e) {

    if (!menu.is(e.target) && menu.has(e.target).length == 0 && !somenu_tdn.is(e.target) && somenu_tdn.has(e
            .target).length == 0) {
        menu.hide();
    }

})
</script>