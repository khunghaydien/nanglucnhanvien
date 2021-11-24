<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thêm mới quản lý đề kiểm tra năng lực nhân viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dat.css">
</head>

<body>
    <div id="ql_tieuchi_nangluc_chitiet" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header">
                                <div class="d_flex"> <a href='/quan_ly_de_kiem_tra_nang_luc.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Quản lý đề kiểm tra năng lực nhân viên<span> / </span><span> Thêm mới</span></p>
                                </div>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="body_ql_tieuchi body_ql_tieuchi_chitiet mb_20">
                                <div class="title_header">
                                    <div class="d_flex"> <a href='/quan_ly_de_kiem_tra_nang_luc.html'
                                            class="img_quaylai mr_10">
                                            <img src="../img/icon_so.png" alt="Quay lại">
                                        </a>
                                        <p>Quản lý đề kiểm tra năng lực nhân viên<span> / </span><span> Thêm mới</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="header_d width_100">
                                    <h4>Thêm mới đề kiểm tra năng lực nhân viên</h4>
                                </div>
                                <div class="body width_100">
                                    <form action="" method="" enctype="multipart/form-data"
                                        class="form form_themmoi_de">
                                        <div class="container mb_20">
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for="">Tên đề kiểm tra năng lực nhân viên<span
                                                            class="color_red">*</span></label>
                                                    <input type="text" name="ten" placeholder="Nhập tên đề kiểm tra">
                                                </div>
                                                <div class="form_group form_group_block">
                                                    <label for="">Người tạo</label>
                                                    <input type="text" name="nguoi_tao "
                                                        placeholder="Nguyễn Trần Trung Quân"
                                                        value="Nguyễn Trần Trung Quân">
                                                </div>
                                            </div>
                                            <div class="form_container">
                                                <div class="form_group form_group_block">
                                                    <label for="">Ngày tạo</label>
                                                    <input type="text" name="ngay_tao" placeholder="10/10/2020"
                                                        value="10/10/2020">
                                                </div>
                                                <div class="form_group form_group_block">
                                                    <label for="">Thang điểm <span class="color_red">*</span></label>
                                                    <input type="text" name="thang_diem" placeholder="Nhập thang điểm"
                                                        value="100">
                                                </div>
                                            </div>
                                            <div class="form_group">
                                                <label for="">Ghi chú</label>
                                                <textarea id="editor1" name="ghi_chu" value=''></textarea>
                                            </div>
                                        </div>
                                        <!-- câu hỏi không ảnh -->
                                        <div class="container_cauhoi cauhoi_dang_1 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor2" name="cau_hoi" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="mb_15 width_30">
                                                        <div class="form_group ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="sel_dang_1" id="sel_dang_1">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_1.png"
                                                                                    alt="Câu trả lời">
                                                                            </div>
                                                                            <p>câu trả lời</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="sel_dang_2 display_none"
                                                                        id="sel_dang_2">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_2.png"
                                                                                    alt="Trắc nhiệm">
                                                                            </div>
                                                                            <p>Trắc nhiệm</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="sel_dang_3 display_none"
                                                                        id="sel_dang_3">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_3.png"
                                                                                    alt="Hộp kiểm">
                                                                            </div>
                                                                            <p>Hộp kiểm</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="sel_dang_4 display_none"
                                                                        id="sel_dang_4">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_4.png"
                                                                                    alt="Menu thả xuống">
                                                                            </div>
                                                                            <p>Menu thả xuống</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="sel_dang_5 display_none"
                                                                        id="sel_dang_5">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_5.png" alt="Giờ">
                                                                            </div>
                                                                            <p>Giờ</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="sel_dang_6 display_none"
                                                                        id="sel_dang_6">
                                                                        <div class="d_flex">
                                                                            <div class="img mr_10">
                                                                                <img src="../img/hoi_6.png" alt="Ngày">
                                                                            </div>
                                                                            <p>Ngày</p>
                                                                        </div>

                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>

                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item chon_dang_1" id="chon_dang_1">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item chon_dang_2" id="chon_dang_2">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item chon_dang_3" id="chon_dang_3">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item chon_dang_4" id="chon_dang_4">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item chon_dang_5" id="chon_dang_5">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item chon_dang_6" id="chon_dang_6">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_6.png"
                                                                                        alt="Ngày">
                                                                                </div>
                                                                                <p>Ngày</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form_group mb_0">
                                                            <label for="">Thang điểm <span
                                                                    class="color_red">*</span></label>
                                                            <input type="text" name="thang_diem"
                                                                placeholder="Nhập thang điểm">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_group sel_dang_1">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor3" name="dap_an" cols="80" rows="10">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form_group display_none sel_dang_2">
                                                    <label for="">Đáp án</label>
                                                    <div class="tuychon mt_5">
                                                        <div class="container_tuychon">
                                                            <div
                                                                class="tuychon_header width_100 d_flex space_b align_c">
                                                                <div class="tuychon_input d_flex width_70  mr_20">
                                                                    <input type="radio" value="Tùy chọn" name="tuychon"
                                                                        class="mr_10 ">
                                                                    <p class="ten_tuychon">Tùy chọn 1</p>
                                                                </div>
                                                                <div class="them_anh width_30">
                                                                    <div
                                                                        class="btn_them_anh btn_them_anhtuychon item d_flex mr_20">
                                                                        <div class="img mr_5">
                                                                            <img src="../img/hoi_7.png" alt="Tải ảnh">
                                                                        </div>
                                                                        <p>Thêm ảnh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container_img">
                                                        </div>
                                                    </div>
                                                    <div class="btn_them_tuychon d_flex align_c cursor_p " data-id='2'>
                                                        <div class="img mr_10">
                                                            <img src="../img/plus_xanh.png" alt="Thêm tùy chọn">
                                                        </div>
                                                        <p class="color_blue font_s14">Thêm tùy chọn</p>
                                                    </div>
                                                </div>
                                                <div class="form_group display_none sel_dang_3">
                                                    <label for="">Đáp án</label>
                                                    <div class="tuychon mt_5">
                                                        <div class="container_tuychon">
                                                            <div
                                                                class="tuychon_header width_100 d_flex space_b align_c">
                                                                <div class="tuychon_input d_flex width_70  mr_20">
                                                                    <input type="checkbox" value="Tùy chọn"
                                                                        name="tuychon" class="mr_10 ">
                                                                    <p class="ten_tuychon">Tùy chọn 1</p>
                                                                </div>
                                                                <div class="them_anh width_30">
                                                                    <div
                                                                        class="btn_them_anh btn_them_anhtuychon item d_flex mr_20">
                                                                        <div class="img mr_5">
                                                                            <img src="../img/hoi_7.png" alt="Tải ảnh">
                                                                        </div>
                                                                        <p>Thêm ảnh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container_img">
                                                        </div>
                                                    </div>
                                                    <div class="tuychon">
                                                        <div class="container_tuychon">
                                                            <div
                                                                class="tuychon_header width_100 d_flex space_b align_c">
                                                                <div class="tuychon_input d_flex width_70  mr_20">
                                                                    <input type="checkbox" value="Tùy chọn"
                                                                        name="tuychon" class="mr_10 ">
                                                                    <p class="ten_tuychon">Tùy chọn 1</p>
                                                                </div>
                                                                <div class="them_anh width_30">
                                                                    <div
                                                                        class="btn_them_anh btn_them_anhtuychon item d_flex mr_20">
                                                                        <div class="img mr_5">
                                                                            <img src="../img/hoi_7.png" alt="Tải ảnh">
                                                                        </div>
                                                                        <p>Thêm ảnh</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container_img">
                                                        </div>
                                                    </div>

                                                    <div class="btn_them_tuychon_checkbox d_flex align_c cursor_p ">
                                                        <div class="img mr_10">
                                                            <img src="../img/plus_xanh.png" alt="Thêm tùy chọn">
                                                        </div>
                                                        <p class="color_blue font_s14">Thêm tùy chọn</p>
                                                    </div>
                                                </div>
                                                <div class="form_group display_none sel_dang_4">
                                                    <label for="">Đáp án</label>
                                                    <div class="tuychon mt_10">
                                                        <div class="container_tuychon">
                                                            <div
                                                                class="tuychon_header width_100 d_flex space_b align_c">
                                                                <div class="tuychon_input d_flex width_70  mr_20">
                                                                    <span class="mr_10">1. </span>
                                                                    <input type="radio" value="Tùy chọn" name="tuychon"
                                                                        class="mr_10 ">
                                                                    <p class="ten_tuychon"> Tùy chọn 1
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn_them_tuychon_menu_soxuong d_flex align_c cursor_p "
                                                        data-id='2'>
                                                        <div class="img mr_10">
                                                            <img src="../img/plus_xanh.png" alt="Thêm tùy chọn">
                                                        </div>
                                                        <p class="color_blue font_s14">Thêm tùy chọn</p>
                                                    </div>
                                                </div>
                                                <div class="form_group display_none sel_dang_5">
                                                    <label for="">Đáp án</label></br>
                                                    <input type="time" class="mt_10">
                                                </div>
                                                <div class="form_group display_none sel_dang_6">
                                                    <label for="">Đáp án</label>
                                                    <input type="date" class="mt_10">
                                                </div>
                                            </div>
                                            <div class="footer_cauhoi">
                                                <div class="d_flex flex_end align_c">
                                                    <div class="container_footer d_flex font_s14">
                                                        <div class="item d_flex mr_20">
                                                            <div class="img mr_5">
                                                                <img src="../img/hoi_7.png" alt="Tải ảnh">
                                                            </div>
                                                            <p>Thêm ảnh</p>
                                                        </div>
                                                        <div class="item d_flex mr_20">
                                                            <div class="img mr_5">
                                                                <img src="../img/hoi_8.png" alt="Nhân bản">
                                                            </div>
                                                            <p>Nhân bản</p>
                                                        </div>
                                                        <div class="item d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/hoi_9.png" alt="Xóa">
                                                            </div>
                                                            <p>Xóa</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end câu hỏi không ảnh -->

                                        <div class="btn_them_cauhoi d_flex align_c mb_20">
                                            <div class="img_themmoi_cauhoi">
                                                <img src="../img/icon_plus.png" alt="Thêm mới">
                                            </div>
                                            <p class="color_blue font_s14 font_w5">Thêm câu hỏi</p>
                                        </div>

                                        <div class="thiet_lap d_flex mb_20">
                                            <h4 class="color_blue font_wB font_ss16 mr_20">
                                                Thiết lập phân loại đánh giá:
                                            </h4>

                                            <div class="container_thietlap">
                                                <div class="d_flex align_c mr_30">
                                                    <input type="radio" name="drone" id="radio_macdinh" value="macdinh"
                                                        class="mr_5" class="check_dm" checked>
                                                    <label for="huey">Mặc định</label>
                                                </div>
                                                <div class="d_flex align_c">
                                                    <input type="radio" name="drone" id="radio_khac" value="khac"
                                                        class="mr_5" class="check_dm">
                                                    <label for="dewey">Khác</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="body_ql_tieuchi phanloai_danhgia phanloai_danhgia_macdinh ">
                                            <div class="header_d width_100">
                                                <h4>Phân loại đánh giá</h4>
                                            </div>
                                            <div class="body width_100">
                                                <ul class="thongtin_tieuchi">
                                                    <li class="item">
                                                        <p>Yếu:</p>
                                                        <p><span>0</span> <span class="mr_10 ml_14">-></span>
                                                            <span>50</span>
                                                        </p>
                                                    </li>
                                                    <li class="item">
                                                        <p>Trung bình:</p>
                                                        <p><span>51</span> <span class="mr_10 ml_14">-></span>
                                                            <span>60</span>
                                                        </p>
                                                    </li>
                                                    <li class="item">
                                                        <p>Khá:</p>
                                                        <p><span>61</span> <span class="mr_10 ml_14">-></span>
                                                            <span>79</span>
                                                        </p>
                                                    </li>
                                                    <li class="item">
                                                        <p>Giỏi:</p>
                                                        <p><span>80</span> <span class="mr_10 ml_14">-></span>
                                                            <span>90</span>
                                                        </p>
                                                    </li>
                                                    <li class="item">
                                                        <p>Xuất sắc:</p>
                                                        <p><span>90</span> <span class="mr_10 ml_14">-></span>
                                                            <span>100</span>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div
                                            class="body_ql_tieuchi phanloai_danhgia phanloai_danhgia_khac display_none">

                                            <div class="header_d width_100">
                                                <h4>Phân loại đánh giá</h4>
                                            </div>

                                            <div class="body width_100">
                                                <div class="container_form_4 d_flex ">
                                                    <div class="form_group ">
                                                        <label for="">Từ <span class="color_red">*</span></label>
                                                        <input type="text" name="tu_diem" value="20"
                                                            placeholder="Nhập số điểm">
                                                    </div>
                                                    <div class="form_group ">
                                                        <label for="">Đến<span class="color_red">*</span></label>
                                                        <input type="text" name="den_diem" value="40"
                                                            placeholder="Nhập số điểm">
                                                    </div>
                                                    <div class="form_group ">
                                                        <label for="">Loại<span class="color_red">*</span></label>
                                                        <div class="select_no_muti ">
                                                            <select class="js_select_2 " name="loai_danhgia">
                                                                <option value="0">chọn loại</option>
                                                                <option value="1">Yếu</option>
                                                                <option value="2">Trung bình</option>
                                                                <option value="3">Khá</option>
                                                                <option value="4">Giỏi</option>
                                                                <option value="5">Xuất sắc</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form_group form_btn d_flex content_c">
                                                        <button class="btn btn_xoa_loai btn_trang">Xóa</button>
                                                    </div>
                                                </div>
                                                <div class="themmoi_form themmoi_loai">
                                                    <div class="btn btn_xanh ">
                                                        <div class="img mr_10">
                                                            <img src="../img/icon_plus.png" alt="Thêm mới">
                                                        </div>
                                                        <p>Thêm loại</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="btn_form_de  d_flex content_c mt_25">
                                            <div class="btn_huy btn btn_168 btn_trang mr_68">
                                                Hủy
                                            </div>
                                            <button type="submit" class="btn_tieptuc_1 btn btn_168 btn_xanh ">
                                                <div class="d_flex align_c ">
                                                    <p class="mr_10">Tiếp tục</p>
                                                    <div class="img height_15">
                                                        <img src="../img/next_trang.png" alt="Tiếp tục">
                                                    </div>
                                                </div>
                                            </button>
                                        </div>

                                    </form>
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
<script src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/dat.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script>
$('.form_themmoi_de').validate({
    errorPlacement: function(error, element) {
        error.appendTo(element.parents(".form_group"));
        error.wrap("<span class='error'>");
    },
    rules: {
        ten: "required",
        thang_diem: "required",
        cau_hoi: "required",
    },
    messages: {
        ten: "Không được để trống",
        thang_diem: "Không được để trống điểm",
        cau_hoi: "Không được để trống câu hỏi",
    },
});
$('input.check_dm').click(function() {
    if ($(this).val() == "macdinh") {
        $('.phanloai_danhgia_macdinh').show();
        $('.phanloai_danhgia_khac').hide();
    } else {
        $('.phanloai_danhgia_macdinh').hide();
        $('.phanloai_danhgia_khac').show();
    }
})
$('#chon_dang_1').click(function() {
    $('.sel_dang_1').show();
    $('.sel_dang_2').hide();
    $('.sel_dang_3').hide();
    $('.sel_dang_4').hide();
    $('.sel_dang_5').hide();
    $('.sel_dang_6').hide();
})
$('#chon_dang_2').click(function() {
    $('.sel_dang_2').show();
    $('.sel_dang_1').hide();
    $('.sel_dang_3').hide();
    $('.sel_dang_4').hide();
    $('.sel_dang_5').hide();
    $('.sel_dang_6').hide();
})
$('#chon_dang_3').click(function() {
    $('.sel_dang_3').show();
    $('.sel_dang_1').hide();
    $('.sel_dang_2').hide();
    $('.sel_dang_4').hide();
    $('.sel_dang_5').hide();
    $('.sel_dang_6').hide();
})
$('#chon_dang_4').click(function() {
    $('.sel_dang_4').show();
    $('.sel_dang_1').hide();
    $('.sel_dang_2').hide();
    $('.sel_dang_3').hide();
    $('.sel_dang_5').hide();
    $('.sel_dang_6').hide();
})
$('#chon_dang_5').click(function() {
    $('.sel_dang_5').show();
    $('.sel_dang_1').hide();
    $('.sel_dang_3').hide();
    $('.sel_dang_4').hide();
    $('.sel_dang_2').hide();
    $('.sel_dang_6').hide();
})
$('#chon_dang_6').click(function() {
    $('.sel_dang_6').show();
    $('.sel_dang_1').hide();
    $('.sel_dang_3').hide();
    $('.sel_dang_4').hide();
    $('.sel_dang_5').hide();
    $('.sel_dang_2').hide();
})

$('.js_select_2').select2({
    width: '100%',
})
CKEDITOR.replace('editor1', {
    height: '108'
});
CKEDITOR.replace('editor2', {
    height: '75',
});
CKEDITOR.replace('editor3', {
    height: '108',
});
</script>

</html>