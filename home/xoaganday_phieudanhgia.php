<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa-Phiếu đánh giá</title>
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
                            <p>Dữ liệu đã xóa gần đây / Phiếu đánh giá</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phieudanhgia box-qlinhanvien">
                            <div class="tieude1024 size-14 flex center-height bot-15">
                                <a href="/xoaganday-dulieuxoaganday.html">
                                    <div class="flex center-height right-10 c-pointer">
                                        <img src="../img/manhimg/back.png" alt="Quay lai">
                                    </div>
                                </a>
                                <p>Dữ liệu đã xóa gần đây / Phiếu đánh giá</p>
                            </div>
                            <div class="search-qlnv">
                                <div class="khoi_left">
                                    <div class="leftsearch">
                                        <input type="text" name="" placeholder="Tìm kiếm theo tên phiếu đánh giá">
                                        <img src="../img/manhimg/kinhlup.png" class="kinhlup right-position-15"
                                            alt="tìm kiếm">
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

                                        <a href="/huong_dan.html">
                                            <div class="huongdan flex center-height ">
                                                <img src="../img/manhimg/chamhoi.png" class="wh36" alt="">
                                                <p class="left-10 font-medium size-15">Hướng dẫn</p>
                                            </div>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="khoibang po_r">
                                <div class="thanh_dk">
                                    <div class="turn turn_left" id="turn_left">
                                        <img src="../img/left.png" alt="sang trái">
                                    </div>
                                    <div class=" turn turn_right" id="turn_right">
                                        <img src="../img/right.png" alt="sang phải">
                                    </div>
                                </div>
                                <div class="bangchung" id="bang_chung">
                                    <table class="bangchinh chuden">
                                        <tr>
                                            <th>
                                                <p class="phantucon">STT</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Mã phiếu</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tên kế hoạch đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Trạng thái</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tiến độ</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Đối tượng</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Số đối tượng</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Thời gian</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ghi chú</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Chức năng</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16 js_checkbox" type="checkbox"></td>
                                            <td class="chuxanh text-left"><a class="chuxanh"
                                                    href="/phieudanhgia-de-kiemtra-nv.html">PDG0000</a></td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuxanhluc">Hoàn thành</td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress">
                                                        </div>
                                                        <div class="progress--bar" style="width: 50%">50%
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center js_thanhvien c-pointer">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Ghi chú 1</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <div class="c-pointer flex js_khoiphuc"
                                                        onclick="hienpopupid('popup_before')">
                                                        <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chuxanh font-medium size-14">Khôi phục
                                                        </p>
                                                    </div>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <div class="c-pointer flex js_xoavv"
                                                        onclick="hienpopupid('popup_before')">

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
                                            <td class="chuxanh text-left">PDG0000</td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chucam">Chờ duyệt</td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress chuden">0%
                                                        </div>
                                                        <div class="progress--bar hidden" style="width: 0%">50%
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Tích hợp tất cả các ứng dụng doanh nghiệp
                                                của bạn đang cần trên một nền tảng duy nhất.</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <div class="c-pointer flex js_khoiphuc"
                                                        onclick="hienpopupid('popup_before')">
                                                        <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chuxanh font-medium size-14">Khôi phục
                                                        </p>
                                                    </div>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <div class="c-pointer flex js_xoavv"
                                                        onclick="hienpopupid('popup_before')">

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
                                            <td class="chuxanh text-left">PDG0000</td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chudo">Quá hạn</td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress">
                                                        </div>
                                                        <div class="progress--bar" style="width: 100%">100%
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center js_thanhvien c-pointer">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Ghi chú 1</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <div class="c-pointer flex js_khoiphuc"
                                                        onclick="hienpopupid('popup_before')">
                                                        <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chuxanh font-medium size-14">Khôi phục
                                                        </p>
                                                    </div>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <div class="c-pointer flex js_xoavv"
                                                        onclick="hienpopupid('popup_before')">
                                                        <img src="../img/manhimg/xoa.png" class="right-5"
                                                            alt="khooi phuc">
                                                        <p class="chudo font-medium size-14">Xóa
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex center-height space khoi_footerbang">
                        <div class="flex top-10 center-height khoi_footerbang_hienthi">
                            <p class="chuden size-14 right-10">Hiển thị:</p>
                            <div class="nentrang m_hienthi">
                                <div class="flex center-height hienthi">
                                    <p class="chuden size-14 right-15">40</p>
                                    <div class="center-height flex">
                                        <img src="../img/manhimg/down.png" alt="muitenxuong">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex khoi_footerbang_phantrang">
                            <div class="m_phantrang flex">
                                <div class="phantrangcon right-15 "> < </div>
                                        <div class="phantrangcon right-10 pt_active">1</div>
                                        <div class="phantrangcon right-10 ">2</div>
                                        <div class="phantrangcon right-10 ">3</div>
                                        <div class="phantrangcon right-10 ">4</div>
                                        <div class="phantrangcon">5</div>
                                        <div class="phantrangcon left-15 ">></div>
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
        '<p> Bạn có chắc chắn muốn khôi phục phiếu đánh giá</p><p class="top-5 font-medium">Phiếu đánh giá nhân viên 1!</p>'
        );
    $(".h4_change").text('Khôi phục phiếu đánh giá đã xóa');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Khôi phục phiếu đánh giá  <span class="font-medium">Phiếu đánh giá nhân viên 1</span></p><p class="top-5">thất bại!!</p>'
            );
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Khôi phục phiếu đánh giá  <span class="font-medium">Phiếu đánh giá nhân viên 1</span></p><p class="top-5">thành công!</p>'
            );
    });
});
$(".js_xoavv").click(function() {
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn xóa phiếu đánh giá</p><p class="top-5 font-medium">Phiếu đánh giá nhân viên 1!</p>'
        );
    $(".h4_change").text('Xóa vĩnh viễn phiếu đánh giá');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Xóa phiếu đánh giá  <span class="font-medium">Phiếu đánh giá nhân viên 1</span></p><p class="top-5">thất bại!!</p>'
            );
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Xóa phiếu đánh giá  <span class="font-medium">Phiếu đánh giá nhân viên 1</span></p><p class="top-5">thành công!</p>'
            );
    });
});
$(".tongso_khoiphuc").click(function() {
    $(".h4_change").text('Khôi phục phiếu đánh giá đã xóa');
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn khôi phục <span class="font-medium">4</span> phiếu đánh giá đã chọn</p>');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p> Khôi phục <span class="font-medium">4</span> phiếu đánh giá đã chọn thất bại!</p>');
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p> Khôi phục <span class="font-medium">4</span> phiếu đánh giá đã chọn thành công!</p>'
            );
    });
});
$(".tongso_xoavv").click(function() {
    $(".h4_change").text('Xóa vĩnh viễn phiếu đánh giá');
    $(".text_before_change").html(
        '<p> Bạn có chắc chắn muốn xóa <span class="font-medium">4</span> phiếu đánh giá đã chọn</p>');
    $(".btnhuy_before").click(function() {
        $(".change_text_tb").html(
            '<p>Xóa <span class="font-medium">4</span> phiếu đánh giá đã chọn thất bại!</p>');
    });
    $(".btnluu_before").click(function() {
        $(".change_text_tc").html(
            '<p>Xóa <span class="font-medium">4</span> phiếu đánh giá đã chọn thành công!</p>');
    });
});
</script>