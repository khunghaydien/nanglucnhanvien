<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De danh gia</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/saitaman.css">
    <link rel="stylesheet" type="text/css" href="../css/tatsumaki.css">
</head>

<body>
    <div class="wapper">
        <div class="d_flex">
            <? include('../includes/cd_sidebar.php'); ?>
            <div class="main">
                <div class="header back_w border_r10 w_100">
                    <div class="box_header d_flex space_b align_c position_r">
                        <div class="title_header flex center-height">
                            <a href="/xoaganday-dulieuxoaganday.html">
                                <div class="flex center-height right-10 c-pointer">
                                    <img src="../img/manhimg/back.png" alt="Quay lai">
                                </div>
                            </a>
                            <p>Dữ liệu đã xóa gần đây / Đề đánh giá</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="dedanhgia box-qlinhanvien">
                            <div class="tieude1024 size-14 flex center-height bot-15">
                                <a href="/xoaganday-dulieuxoaganday.html">
                                    <div class="flex center-height right-10 c-pointer">
                                        <img src="../img/manhimg/back.png" alt="Quay lai">
                                    </div>
                                </a>
                                <p>Dữ liệu đã xóa gần đây / Đề đánh giá</p>
                            </div>
                            <div class="khoidanhmuc ">
                                <div class="khoidanhmuccon">
                                    <a href="/xoaganday-tieuchi-danh-gia.html" class="tendanhmuccon  size-14">Tiêu chí
                                        đánh
                                        giá</a>
                                    <div class="border "></div>
                                </div>
                                <div class="khoidanhmuccon">
                                    <a href="/xoaganday-de-danh-gia.html" class="tendanhmuccon chuxanhdam size-14">Đề
                                        đánh giá</a>
                                    <div class="border border-active"></div>
                                </div>
                            </div>
                            <div class="search-qlnv">
                                <div class="khoi_left">
                                    <div class="leftsearch">
                                        <input type="text" name="" placeholder="Tìm kiếm nhân viên">
                                        <img src="../img/manhimg/kinhlup.png" class="kinhlup right-position-15"
                                            alt="timkiem">
                                    </div>
                                </div>
                                <div class="rightsearch flex center-height">
                                    <div class="flex rightsearch_con2">
                                        <button
                                            class="hidden button btn-nentrang-chuxanh un-m-r center-height br-10 size-16 c-pointer tongso_xoavv"
                                            onclick="hienpopupid('popup_before')">
                                            <p class=" chuxanh font-medium">
                                                Xóa vĩnh viễn
                                            </p>
                                        </button>
                                        <button
                                            class="hidden button nenxanh-chutrang un-m-r center-height br-10 size-16 c-pointer tongso_khoiphuc"
                                            onclick="hienpopupid('popup_before')">
                                            <p class=" chutrang font-medium ">
                                                Khôi phục
                                            </p>
                                        </button>

                                        <button
                                            class="btn-nenxanhluc-chutrang button center-height br-10 size-16 js_xuatexcel">
                                            <img src="../../img/manhimg/xuatexcel.png" class="wh14" alt="">
                                            <p class="left-10 font-medium">Xuất excel</p>
                                        </button>

                                        <a href="/huongdan.html">
                                            <div class="huongdan flex center-height ">
                                                <img src="../img/manhimg/chamhoi.png" class="wh36" alt="">
                                                <p class="left-10 font-medium size-15">Hướng dẫn</p>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="khoibang">
                                <div class="bangchung">
                                    <table class="bangchinh chuden">
                                        <tr>
                                            <th>
                                                <p class="phantucon">STT</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tên mẫu tiêu chí đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người tạo</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ghi chú</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ngày xóa</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Chức năng</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16 js_checkbox" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Mẫu đánh giá nhân viên 1</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-left">Ghi chú 1</td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <div class="c-pointer flex js_khoiphuc"
                                                        onclick="hienpopupid('popup_before')">
                                                        <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chuxanh font-medium size-14">Khôi phục
                                                        </p>
                                                    </div>
                                                    <div class="c-pointer flex js_xoavv"
                                                        onclick="hienpopupid('popup_before')">
                                                        <p class="chuxanh right-5 left-5">|</p>
                                                        <img src="../img/manhimg/xoa.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chudo font-medium size-14">Xóa
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16 js_checkbox" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Mẫu đánh giá nhân viên 1</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-left">Tích hợp tất cả các ứng dụng doanh nghiệp của bạn đang
                                                cần trên một nền tảng duy nhất.</td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                        alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16 js_checkbox" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Mẫu đánh giá nhân viên 1</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-left">Ghi chú 1</td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                        alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="nentrang keotrai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/phai.png" alt="">
                                        </div>
                                    </div>
                                    <div class="nentrang keophai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/trai.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<? include('../includes/manh_modal.php'); ?>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/manh.js"></script>

</html>
<script type="text/javascript">
$(".js_khoiphuc").click(function() {
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn khôi phục đề đánh giá</p><p class="top-5 font-medium">Đề đánh giá 1!</p>'
    );
    $(".h4_change").text('Khôi phục đề đánh giá đã xóa');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Khôi phục đề đánh giá  <span class="font-medium">Đề đánh giá 1</span></p><p class="top-5">thất bại!!</p>'
        );
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Khôi phục đề đánh giá  <span class="font-medium">Đề đánh giá 1</span></p><p class="top-5">thành công!</p>'
        );
    });
});
$(".js_xoavv").click(function() {
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn xóa đề đánh giá</p><p class="top-5 font-medium">Đề đánh giá 1!</p>');
    $(".h4_change").text('Xóa vĩnh viễn đề đánh giá');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Xóa đề đánh giá  <span class="font-medium">Đề đánh giá 1</span></p><p class="top-5">thất bại!!</p>'
        );
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Xóa đề đánh giá  <span class="font-medium">Đề đánh giá 1</span></p><p class="top-5">thành công!</p>'
        );
    });
});
$(".tongso_khoiphuc").click(function() {
    $(".h4_change").text('Khôi phục đề đánh giá đã xóa');
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn khôi phục <span class="font-medium">4</span> đề đánh giá đã chọn</p>');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Khôi phục <span class="font-medium">4</span> đề đánh giá đã chọn thất bại!</p>');
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Khôi phục <span class="font-medium">4</span> đề đánh giá đã chọn thành công!</p>');
    });
});
$(".tongso_xoavv").click(function() {
    $(".h4_change").text('Xóa vĩnh viễn đề đánh giá');
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn xóa <span class="font-medium">4</span> đề đánh giá đã chọn</p>');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p>Xóa <span class="font-medium">4</span> đề đánh giá đã chọn thất bại!</p>');
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p>Xóa <span class="font-medium">4</span> đề đánh giá đã chọn thành công!</p>');
    });
});
</script>