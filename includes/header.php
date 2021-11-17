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
    <div class="nav1024">
        <div class="drop">
            <img class="js-drop-menu1024" src="../img/nav_1.png" alt="">
            <div class="menu1024 js-show-menu1024">
                <a href="index.html" class="menu-sl">
                    <img class="img-sl1" src="../img/nav_2.png" alt="">
                    <div class="text-sl1">Trang chủ</div>
                </a>
                <a href="san_pham.html" class="menu-sl">
                    <img class="img-sl1" src="../img/nav_3.png" alt="">
                    <div class="text-sl1">Hướng dẫn </div>
                </a>
                <a href="he_sinh_thai.html" class="menu-sl">
                    <img class="img-sl1" src="../img/nav_5.png" alt="">
                    <div class="text-sl1">Tin tức</div>
                </a>
                <a href="m_gioi_thieu.html" class="menu-sl">
                    <img class="img-sl1" src="../img/nav_4.png" alt="">
                    <div class="text-sl1">Đăng ký </div>
                </a>
                <a class="menu-sl">
                    <img class="img-sl1" src="../img/nav_6.png" alt="">
                    <div class="text-sl1">Đăng nhập</div>
                </a>
            </div>
        </div>
        <div class="logo1024">
            <img src="../img/logo1024.png" alt="">
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