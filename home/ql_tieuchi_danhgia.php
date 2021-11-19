<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quản lý tiêu chí đánh giá</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dat.css">
</head>

<body>
    <div id="ql_tieuchi_danhgia" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header">
                                <p>Danh sách lý tiêu chí đánh giá </p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="header_ql_tieuchi width_100 mb_20">
                                <div class="title_header">
                                    <p>Danh sách lý tiêu chí đánh giá </p>
                                </div>
                                <div class="d_flex space_b align_c mb_20">
                                    <div class="select_no_muti select_no_muti_2 ">
                                        <select class="js_select_2" name="loai_tc">
                                            <option value="">Tất cả trạng thái</option>
                                            <option value="">Đang mở</option>
                                            <option value="">Đã đóng</option>
                                        </select>
                                    </div>
                                    <a href="/huong_dan.html" class="huong_dan d_flex align_c">
                                        <img src="../img/chamhoi.png" alt="Hướng đẫn" class="mr_6">
                                        <p class="font_s15 font_w5 color_blue">Hướng dẫn</p>
                                    </a>
                                </div>
                                <div class="d_flex space_b align_c">
                                    <div class="thanh_search ql_tieuchi">
                                        <input type="text" class="search_item font_s14 color_gray"
                                            placeholder="Tìm kiếm theo tên tiêu chí">
                                        <span class="see_search"></span>
                                    </div>
                                    <div class="them_moi">
                                        <a href='/quan_ly_tieu_chi_danh_gia_them_moi.html' class="btn btn_xanh">
                                            <img src="../img/icon_plus.png" alt="Thêm mới" class="mr_10">
                                            <p>Thêm mới</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="body_ql_tieuchi ">
                                <div class="khoibang">
                                    <div class="bangchung" id="bang_chung">
                                        <table class="bangchinh tieu_chi">
                                            <tr>
                                                <th>
                                                    <p class="phantucon">STT</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Tên tiêu chí</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Loại tiêu chí</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Thang điểm</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Người tạo</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Ngày tạo</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Trạng thái</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Chức năng</p>
                                                </th>
                                            </tr>
                                            <tr class="cha_tieuchi_1">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <div class="d_flex btn_soxuong">
                                                        <a href="quan_ly_tieu_chi_danh_gia_chi_tiet.html"
                                                            class="mr_10 color_blue font_w5">Kiến thức</a>
                                                        <div class="img so_xoay so_xoay_1">
                                                            <img src="../img/icon_so.png" alt="Sổ xuống">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí tổng hợp</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo trangthai_tat">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_1">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_1">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="cha_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <div class="d_flex btn_soxuong">
                                                        <a href="/quan_ly_tieu_chi_danh_gia_chi_tiet.html"
                                                            class="mr_10 color_blue font_w5">Tiêu chí cha người dụng
                                                            tự
                                                            tạo</a>
                                                        <div class="img so_xoay so_xoay_2">
                                                            <img src="../img/icon_so.png" alt="Sổ xuống">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí tổng hợp</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <div class="d_flex align_c">
                                                        <div class="img mr_10">
                                                            <img src="../img/avt1.png" alt="Người tạo">
                                                        </div>
                                                        <p>Nguyễn Trần Trung Quân</p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html">
                                                            <div class="btn_chinhsua position_r d_flex mr_14">
                                                                <div class="img mr_5">
                                                                    <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                                </div>
                                                                <p class="color_blue font_w5">Sửa</p>
                                                            </div>
                                                        </a>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="con_tieuchi_2">
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l color_blue">
                                                        <a class="color_blue"
                                                            href="quan_ly_tieu_chi_danh_gia_chi_tiet.html">Hiểu biết
                                                            thấu
                                                            đáo</a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <p>Tiêu chí đơn</p>
                                                </td>
                                                <td>
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Mặc định</p>
                                                </td>
                                                <td>
                                                    <p>10/10/2020</p>
                                                </td>
                                                <td>
                                                    <label class="switch_tatmo">
                                                        <input type="checkbox" checked>
                                                        <span class="slider round"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <a href="/quan_ly_tieu_chi_danh_gia_chinh_sua.html"
                                                        class="btn_chinhsua d_flex content_c">
                                                        <div class="img mr_5">
                                                            <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                        </div>
                                                        <p class="color_blue font_w5">Sửa</p>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="footer_bang">
                                    <div class="d_flex width_100 mt_15 align_c space_b">
                                        <div class="d_flex align_c">
                                            <p class="font_s14 mr_10">Hiển thị:</p>
                                            <div class="select_no_muti select_no_muti_chon ">
                                                <select class="js_select_2" name="loai_tc">
                                                    <option value="">40</option>
                                                    <option value="">10</option>
                                                    <option value="">20</option>
                                                    <option value="">80</option>
                                                    <option value="">100</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="phan_trang">
                                            <ul class="d_flex align_c content_c">
                                                <li>
                                                    < </li>
                                                <li class="active">1</li>
                                                <li>2</li>
                                                <li>3</li>
                                                <li>4</li>
                                                <li>5</li>
                                                <li>
                                                    > </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thanh_dk">
                                    <div class="turn turn_left" id="turn_left">
                                        <img src="../img/left.png" alt="sang trái">
                                    </div>
                                    <div class=" turn turn_right" id="turn_right">
                                        <img src="../img/right.png" alt="sang phải">
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
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/dat.js"></script>
<script>
$('.js_select_2').select2({
    width: '100%',
})
$('.so_xoay_1').click(function() {
    $('.con_tieuchi_1').toggle();
    $(this).toggleClass('xoay_ro');
})
$('.so_xoay_2').click(function() {
    $('.con_tieuchi_2').toggle();
    $(this).toggleClass('xoay_ro');
})
</script>

</html>