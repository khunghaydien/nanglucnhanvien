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
                            <div class="title_header d_flex">
                                <a href='/quan_ly_de_kiem_tra_nang_luc.html' class="img_quaylai mr_10">
                                    <img src="../img/icon_so.png" alt="Quay lại">
                                </a>
                                <p>Quản lý đề kiểm tra năng lực nhân viên<span> / </span><span> Thêm mới</span></p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="body_ql_tieuchi body_ql_tieuchi_chitiet mb_20">
                                <div class="header width_100">
                                    <h4>Thêm mới đề kiểm tra năng lực nhân viên</h4>
                                </div>
                                <div class="body width_100">
                                    <form action="" method="" enctype="multipart/form-data"
                                        class="form form_them_tieuchi form_sua_tieuchi_con">
                                        <div class="container mb_20">
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for="">Tên đề kiểm tra năng lực nhân viên<span
                                                            class="color_red">*</span></label>
                                                    <input type="text" name="ten" placeholder="Nhập tên đề kiểm tra">
                                                </div>
                                                <div class="form_group form_group_block">
                                                    <label for="">Người tạo</label>
                                                    <input type="text" name="ten" placeholder="Nguyễn Trần Trung Quân">
                                                </div>
                                            </div>
                                            <div class="form_container">
                                                <div class="form_group form_group_block">
                                                    <label for="">Ngày tạo</label>
                                                    <input type="text" name="ten" placeholder="10/10/2020">
                                                </div>
                                                <div class="form_group form_group_block">
                                                    <label for="">Thang điểm <span class="color_red">*</span></label>
                                                    <input type="text" name="thang_diem" placeholder="Nhập thang điểm"
                                                        value="100">
                                                </div>
                                            </div>
                                            <div class="form_group">
                                                <label for="">Ghi chú</label>
                                                <textarea id="editor1" name="editor1" value=''></textarea>
                                            </div>
                                        </div>
                                        <!-- câu hỏi không ảnh -->
                                        <div class="container_cauhoi cauhoi_dang_1 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor2" name="editor1" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_1.png"
                                                                                alt="Câu trả lời">
                                                                        </div>
                                                                        <p>câu trả lời</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor3" name="editor1" cols="80" rows="10"
                                                            value=''>
                                                        </textarea>
                                                    </div>
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
                                        <!-- câu hỏi 1 ảnh -->
                                        <div class="container_cauhoi cauhoi_dang_2 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat"> <textarea id="editor4" name="editor1"
                                                                cols="80" rows="10" value=''></textarea></div>

                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_1.png"
                                                                                alt="Câu trả lời">
                                                                        </div>
                                                                        <p>câu trả lời</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <input type="file" name="anh" class="anh_tailen">
                                                    <div class="container_anh container_anh_1">
                                                        <div class="item_anh item_anh_1">
                                                            <div class="img_anh_tailen img_anh_tailen_1">
                                                                <img src="" alt="Ảnh tải lên">
                                                            </div>
                                                            <div class="xoa_anh d_flex">
                                                                <div class="img mr_5">
                                                                    <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                </div>
                                                                <p class="font_s14 color_red">Xóa</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor5" name="editor1" cols="80" rows="10"
                                                            value=''>
                                                        </textarea>
                                                    </div>
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
                                        <!--end câu hỏi 1 ảnh -->
                                        <!-- câu hỏi 4 ảnh -->
                                        <div class="container_cauhoi cauhoi_dang_2 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat"> <textarea id="editor6" name="editor1"
                                                                cols="80" rows="10" value=''></textarea></div>

                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_1.png"
                                                                                alt="Câu trả lời">
                                                                        </div>
                                                                        <p>câu trả lời</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor7" name="editor1" cols="80" rows="10"
                                                            value=''>
                                                        </textarea>
                                                    </div>
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
                                        <!--end  câu hỏi 4 ảnh -->
                                        <!-- câu hỏi trắc nghiệm -->
                                        <div class="container_cauhoi cauhoi_dang_3 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor8" name="editor1" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group  ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_2.png"
                                                                                alt="Trắc nghiệm">
                                                                        </div>
                                                                        <p>Trắc nghiệm</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form_group">
                                                    <div class="tuychon">
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
                                            </div>
                                            <div class="form_group">
                                                <label for="">Đáp án</label>
                                                <div class="text_dat">
                                                    <textarea id="editor9" name="editor1" cols="80" rows="10" value=''>
                                                        </textarea>
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
                                        <!-- end câu hỏi trắc nghiệm -->
                                        <!-- Câu hỏi checkbox -->
                                        <div class="container_cauhoi cauhoi_dang_4 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor8" name="editor10" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group  ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_3.png" alt="Hộp điểm">
                                                                        </div>
                                                                        <p>Hộp điểm</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <div class="tuychon">
                                                        <div class="container_tuychon align_end d_flex space_b">
                                                            <div class="item_tuychon width_70 mr_20">
                                                                <label for="">Đáp án</label>
                                                                <div class="d_flex align_c mt_5">
                                                                    <input type="checkbox" value="Tùy chọn" name=""
                                                                        class="mr_10">
                                                                    <span> Tùy chọn 1</span>
                                                                </div>
                                                                <div class="d_flex align_c mt_5">
                                                                    <input type="checkbox" value="Tùy chọn" name=""
                                                                        class="mr_10">
                                                                    <span> Tùy chọn 2</span>
                                                                </div>
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

                                                    <div class="btn_them_tuychon d_flex align_c cursor_p ">
                                                        <div class="img mr_10">
                                                            <img src="../img/plus_xanh.png" alt="Thêm tùy chọn">
                                                        </div>
                                                        <p class="color_blue font_s14">Thêm tùy chọn</p>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor9" name="editor11" cols="80" rows="10"
                                                            value=''>
                                                        </textarea>
                                                    </div>
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
                                        <!--end Câu hỏi checkbox -->
                                        <!-- câu hỏi menu thả xuống -->
                                        <div class="container_cauhoi cauhoi_dang_5 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor12" name="editor10" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group  ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_4.png"
                                                                                alt="Thả menu xuống">
                                                                        </div>
                                                                        <p>Thả menu xuống</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form_group">
                                                    <div class="tuychon">
                                                        <div class="container_tuychon align_end d_flex space_b">
                                                            <div class="item_tuychon width_70 mr_20">
                                                                <label for="">Đáp án</label>
                                                                <div class="d_flex align_c mt_5">
                                                                    <input type="radio" value="Tùy chọn" name=""
                                                                        class="mr_10">
                                                                    <span> Tùy chọn 1</span>
                                                                </div>
                                                                <div class="d_flex align_c mt_5">
                                                                    <input type="radio" value="Tùy chọn" name=""
                                                                        class="mr_10">
                                                                    <span> Tùy chọn 2</span>
                                                                </div>
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

                                                    <div class="btn_them_tuychon d_flex align_c cursor_p ">
                                                        <div class="img mr_10">
                                                            <img src="../img/plus_xanh.png" alt="Thêm tùy chọn">
                                                        </div>
                                                        <p class="color_blue font_s14">Thêm tùy chọn</p>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <div class="text_dat">
                                                        <textarea id="editor13" name="editor11" cols="80" rows="10"
                                                            value=''>
                                                        </textarea>
                                                    </div>
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
                                        <!-- end câu hỏi menu thả xuống -->
                                        <!-- câu hỏi giờ -->
                                        <div class="container_cauhoi cauhoi_dang_6 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor14" name="editor10" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group  ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_5.png" alt="Giờ">
                                                                        </div>
                                                                        <p>Giờ</p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <input type="date">
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
                                        <!-- end câu giờ-->
                                        <!-- câu hỏi ngày -->
                                        <div class="container_cauhoi cauhoi_dang_6 mb_20">
                                            <div class="item">
                                                <div class="container_form_3 d_flex space_b align_c ">
                                                    <div class="form_group width_70 mr_20">
                                                        <label for="">Câu hỏi <span class="color_red">*</span></label>
                                                        <div class="text_dat">
                                                            <textarea id="editor16" name="editor10" cols="80" rows="10"
                                                                value=''>
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_30">
                                                        <div class="form_group  ">
                                                            <label for="">Loại câu hỏi</label>
                                                            <div class="btn_loaihoi position_r">
                                                                <div class="width_100 d_flex space_b algin_c">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/hoi_6.png" alt="Ngày">
                                                                        </div>
                                                                        <p>Ngày </p>
                                                                    </div>
                                                                    <div class="img">
                                                                        <img src="../img/icon_so.png" alt="Chọn">
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="modal_d modal_ql_tieuchi sub_loaihoi position_a">
                                                                    <div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_1.png"
                                                                                        alt="Tất cả trạng thái">
                                                                                </div>
                                                                                <p>Tất cả trạng thái</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_2.png"
                                                                                        alt="Trắc nhiệm">
                                                                                </div>
                                                                                <p>Trắc nhiệm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_3.png"
                                                                                        alt="Hộp kiểm">
                                                                                </div>
                                                                                <p>Hộp kiểm</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_4.png"
                                                                                        alt="Menu thả xuống">
                                                                                </div>
                                                                                <p>Menu thả xuống</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
                                                                            <div class="d_flex">
                                                                                <div class="img mr_10">
                                                                                    <img src="../img/hoi_5.png"
                                                                                        alt="Giờ">
                                                                                </div>
                                                                                <p>Giờ</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="item">
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
                                                                placeholder="Nhập thang điểm" value="100">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_group">
                                                        <input type="file" name="anh" class="anh_tailen">
                                                        <div class="container_anh container_anh_1">
                                                            <div class="item_anh item_anh_1">
                                                                <div class="img_anh_tailen img_anh_tailen_1">
                                                                    <img src="" alt="Ảnh tải lên">
                                                                </div>
                                                                <div class="xoa_anh d_flex">
                                                                    <div class="img mr_5">
                                                                        <img src="../img/hoi_10.png" alt="Xóa ảnh">
                                                                    </div>
                                                                    <p class="font_s14 color_red">Xóa</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="form_group">
                                                    <label for="">Đáp án</label>
                                                    <input type="date">
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
                                        <!-- end câu giờ-->
                                        <div class="d_flex align_c mb_20">
                                            <div class="img_themmoi_cauhoi">
                                                <img src="../img/icon_plus.png" alt="Thêm mới">
                                            </div>
                                            <p class="color_blue font_s14 font_w5">Thêm câu hỏi</p>
                                        </div>

                                        <div class="d_flex mb_20">
                                            <h4 class="color_blue font_wB font_ss16 mr_20">
                                                Thiết lập phân loại đánh giá:
                                            </h4>
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

                                        <div class="body_ql_tieuchi phanloai_danhgia phanloai_danhgia_macdinh ">
                                            <div class="header width_100">
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
                                            <div class="header width_100">
                                                <h4>Phân loại đánh giá</h4>
                                            </div>
                                            <div class="body width_100">
                                                <form action="">
                                                    <div class="form_group container_form_4 d_flex align_c">
                                                        <div class="form_group ">
                                                            <label for="">Từ <span class="color_red">*</span></label>
                                                            <input type="text" name="sodiem" placeholder="Nhập số điểm">
                                                        </div>
                                                        <div class="form_group ">
                                                            <label for="">Đến<span class="color_red">*</span></label>
                                                            <input type="text" name="thang_diem"
                                                                placeholder="Nhập số điểm">
                                                        </div>
                                                        <div class="form_group ">
                                                            <label for="">Loại<span class="color_red">*</span></label>
                                                            <div class="select_no_muti ">
                                                                <select class="js_select_2 " name="loai_tc">
                                                                    <option value="">chọn loại</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form_btn d_flex content_c">
                                                            <button class="btn btn_trang">Xóa</button>
                                                        </div>
                                                    </div>
                                                    <div class="themmoi_form">
                                                        <div class="btn btn_xanh ">
                                                            <div class="img mr_10">
                                                                <img src="../img/icon_plus.png" alt="Thêm mới">
                                                            </div>
                                                            <p>Thêm loại</p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
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
<script type="text/javascript" src="../js/dat.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script>
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
CKEDITOR.replace('editor4', {
    height: '75',
});
CKEDITOR.replace('editor5', {
    height: '108',
});
CKEDITOR.replace('editor6', {
    height: '75',
});
CKEDITOR.replace('editor7', {
    height: '108',
});
CKEDITOR.replace('editor8', {
    height: '75',
});
CKEDITOR.replace('editor9', {
    height: '108',
});
CKEDITOR.replace('editor10', {
    height: '75',
});
CKEDITOR.replace('editor11', {
    height: '108',
});
CKEDITOR.replace('editor12', {
    height: '75',
});
CKEDITOR.replace('editor13', {
    height: '108',
});
CKEDITOR.replace('editor14', {
    height: '75',
});
CKEDITOR.replace('editor16', {
    height: '75',
});
</script>

</html>