<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quản lý đề kiểm tra năng lực nhân viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
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
                                <p>Quản lý đề kiểm tra năng lực nhân viên</p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="header_ql_tieuchi width_100 mb_20">
                                <div class="title_header">
                                    <p>Quản lý đề kiểm tra năng lực nhân viên</p>
                                </div>
                                <div class="d_flex space_b align_c">
                                    <div class="thanh_search ql_tieuchi">
                                        <input type="text" class="search_item font_s14 color_gray"
                                            placeholder="Tìm kiếm theo tên đề kiểm tra">
                                        <span class="see_search"></span>
                                    </div>
                                    <div class="d_flex">
                                        <div class="them_moi mr_15">
                                            <a href='/quan_ly_de_kiem_tra_nang_luc_them_moi.html' class="btn btn_xanh">
                                                <img src="../img/icon_plus.png" alt="Thêm mới" class="mr_10">
                                                <p>Thêm mới</p>
                                            </a>
                                        </div>
                                        <a href="/huong_dan.html" class="huong_dan d_flex align_c">
                                            <img src="../img/chamhoi.png" alt="Hướng đẫn" class="mr_6">
                                            <p class="font_s15 font_w5 color_blue">Hướng dẫn</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="body_ql_tieuchi body_ql_de">
                                <div class="khoibang">
                                    <div class="bangchung" id="bang_chung">
                                        <table class="bangchinh tieu_chi">
                                            <tr>
                                                <th>
                                                    <p class="phantucon">STT</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Đề kiểm tra</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Người tạo </p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Số câu hỏi</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Ghi chú</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Chức năng</p>
                                                </th>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue"
                                                            href="/quan_ly_de_kiem_tra_nang_luc_chitiet.html">Bài đánh
                                                            giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <a href="/quan_ly_de_kiem_tra_nang_luc_chinhsua.html"
                                                            class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </a>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue" href="">Bài đánh giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Tích hợp tất cả các ứng dụng doanh nghiệp của
                                                        bạn đang cần trên một nền tảng duy nhất.</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <div class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </div>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue" href="">Bài đánh giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <div class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </div>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue" href="">Bài đánh giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <div class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </div>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue" href="">Bài đánh giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <div class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </div>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l "> <a class="color_blue" href="">Bài đánh giá
                                                            nhân viên 1</a></p>

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
                                                    <p>10</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l">Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="sua_xoa d_flex content_c ">
                                                        <div class="btn_chinhsua position_r d_flex mr_14">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_sua.png" alt="Chỉnh sửa ">
                                                            </div>
                                                            <p class="color_blue font_w5">Sửa</p>
                                                        </div>
                                                        <div class="btn_xoa d_flex ">
                                                            <div class="img mr_5">
                                                                <img src="../img/icon_xoa.png" alt="Xóa">
                                                            </div>
                                                            <p class="color_blue font_w5">Xóa</p>
                                                        </div>
                                                    </div>
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
                                                    <option value="40">40</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="80">80</option>
                                                    <option value="100">100</option>
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
    <!-- popup xóa -->
    <div class="popup popup_500 popup_xoa ">
        <div class="container">
            <div class="content">
                <div class="popup_header">
                    <h4 class="name_header">Xóa đề kiểm tra năng lực nhân viên</h4>
                    <div class="img close_popup">
                        <img src="../img/close.png" alt="đóng">
                    </div>
                </div>
                <div class="popup_body">
                    <p class="cont_1"> Bạn có chắc chắn muốn xóa bài kiểm tra năng lực nhân viên<span class="font_wB">
                            Bài
                            đánh giá 1</span> ?</p>
                    <div class="popup_btn">
                        <div class="btn btn_trang btn_140 mr_68">Hủy</div>
                        <div class="btn btn_xanh btn_140">
                            Đồng ý
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup xóa -->

    <!-- popup thành công  -->
    <div class="popup popup_500 popup_thanhcong">
        <div class="container">
            <div class="popup_body">
                <div class="img">
                    <img src="../img/popup_1.png" alt="thành công ">
                </div>
                <p class="text_a_c ">Xóa đề kiểm tra năng lực nhân viên <span class="font_wB"> Bài
                        đánh giá 1</span> thành công!</p>
                <div class="popup_btn">
                    <div class="btn btn_xanh close_popup ">
                        Đóng
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup thành công -->

    <!-- popup thất bại   -->
    <div class="popup popup_500 popup_thanhcong">
        <div class="container">
            <div class="popup_body">
                <div class="img">
                    <img src="../img/popup_2.png" alt="Thất bại ">
                </div>
                <p class="text_a_c ">Xóa đề kiểm tra năng lực nhân viên <span class="font_wB"> Bài
                        đánh giá 1</span> thất bại!</p>
                <div class="popup_btn">
                    <div class="btn btn_xanh  close_popup">
                        Đóng
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup thất bại -->
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/dat.js"></script>
<script>
$('.js_select_2').select2({
    width: '100%',
})
$('.btn_xoa').click(function() {
    $('.popup_xoa').show();
})
</script>

</html>