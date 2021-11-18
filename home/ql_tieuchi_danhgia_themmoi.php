<!-- trang này bao gồm 2 loại thêm mới
Thêm mới đơn
Thêm mới cha (bị ẩn) -->

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thêm mới tiêu chí đánh giá</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dat.css">
</head>

<body>
    <div id="ql_tieuchi_them_sua" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header ">
                                <div class="d_flex"> <a href='/quan_ly_tieu_chi_danh_gia.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Danh sách lý tiêu chí đánh giá <span> / </span><span> Thêm mới</span></p>
                                </div>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="body_ql_tieuchi body_ql_tieuchi_danhgia">
                                <div class="title_header ">
                                    <div class="d_flex"> <a href='/quan_ly_tieu_chi_danh_gia.html'
                                            class="img_quaylai mr_10">
                                            <img src="../img/icon_so.png" alt="Quay lại">
                                        </a>
                                        <p>Danh sách lý tiêu chí đánh giá <span> / </span><span> Thêm mới</span></p>
                                    </div>
                                </div>
                                <div class="header width_100">
                                    <h4>Thêm mới tiêu chí</h4>
                                </div>
                                <div class="body width_100">
                                    <!-- form thêm mới tiêu chí con (block người và ngày) -->
                                    <form action="" method="" enctype="multipart/form-data"
                                        class="form form_them_tieuchi form_them_tieuchi_con">
                                        <div class="container">
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for="">Tên tiêu chí <span class="color_red">*</span></label>
                                                    <input type="text" name="ten" placeholder="Nhập tên tiêu chí">
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="d_flex align_c">
                                                        <span>Loại tiêu chí</span>
                                                        <img src="../img/icon_i.png" alt="Thông tin" class="ml_10 mr_5">
                                                        <span class="font_s14 color_blue font_wn">Thông tin</span>
                                                    </label>
                                                    <div class="select_no_muti ">
                                                        <select class="js_select_2 " name="loai_tc">
                                                            <option value="">Tiêu chí đơn</option>
                                                            <option value="">Tiêu chí tổng hợp</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for=""> Trạng thái <span class="color_red">*</span></label>
                                                    <div class="select_no_muti">
                                                        <select class="js_select_2" name="loai_tc">
                                                            <option value="">Mở</option>
                                                            <option value="">Đóng</option>
                                                        </select>
                                                    </div>
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

                                                <div class="form_group">
                                                    <label for="">Thang điểm <span class="color_red">*</span></label>
                                                    <input type="text" name="thang_diem" placeholder="Nhập thang điểm">
                                                </div>
                                            </div>
                                            <div class="form_group">
                                                <label for="">Ghi chú</label>
                                                <textarea id="editor1" name="editor1" cols="80" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form_btn d_flex content_c mt_25">
                                            <button class="btn btn_trang btn_168 mr_60">Hủy</button>
                                            <button class="btn btn_xanh btn_168">Lưu</button>
                                        </div>
                                    </form>
                                    <!--end form thêm mới tiêu chí 1 -->

                                    <!-- form thêm mới tiêu chí cha (block người và ngày) -->
                                    <form action="" method="" enctype="multipart/form-data"
                                        class="form form_them_tieuchi form_them_tieuchi_cha display_none">
                                        <div class="container">
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for="">Tên tiêu chí <span class="color_red">*</span></label>
                                                    <input type="text" name="ten" placeholder="Nhập tên tiêu chí">
                                                </div>
                                                <div class="form_group">
                                                    <label for="" class="d_flex align_c">
                                                        <span>Loại tiêu chí</span>
                                                        <img src="../img/icon_i.png" alt="Thông tin" class="ml_10 mr_5">
                                                        <span class="font_s14 color_blue font_wn">Thông tin</span>
                                                    </label>
                                                    <div class="select_no_muti ">
                                                        <select class="js_select_2 " name="loai_tc">
                                                            <option value="">Tiêu chí đơn</option>
                                                            <option value="">Tiêu chí tổng hợp</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form_container">
                                                <div class="form_group">
                                                    <label for=""> Tiêu chí cha <span class="color_red">*</span></label>
                                                    <div class="select_no_muti">
                                                        <select class="js_select_2 " name="loai_tc">
                                                            <option value="">Tiêu chí cha</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for=""> Trạng thái <span class="color_red">*</span></label>
                                                    <div class="select_no_muti">
                                                        <select class="js_select_2 " name="loai_tc">
                                                            <option value="">Mở</option>
                                                            <option value="">Đóng</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form_container">
                                                <div class="form_group d_flex">
                                                    <div class="form_group form_group_block">
                                                        <label for="">Người tạo</label>
                                                        <input type="text" name="ten"
                                                            placeholder="Nguyễn Trần Trung Quân">
                                                    </div>
                                                    <div class="form_group form_group_block">
                                                        <label for="">Ngày tạo</label>
                                                        <input type="text" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                </div>
                                                <div class="form_group">
                                                    <label for="">Thang điểm <span class="color_red">*</span></label>
                                                    <input type="text" name="thang_diem" placeholder="Nhập thang điểm">
                                                </div>
                                            </div>
                                            <div class="form_group">
                                                <label for="">Ghi chú</label>
                                                <textarea id="editor2" name="editor1" cols="80" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="form_btn d_flex content_c mt_25">
                                            <button class="btn btn_trang btn_168 mr_60">Hủy</button>
                                            <button class="btn btn_xanh btn_168">Lưu</button>
                                        </div>
                                    </form>
                                    <!--end form thêm mới tiêu chí 2 -->
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
    width: '100%'
})
CKEDITOR.replace('editor1', {
    height: '108'
});
CKEDITOR.replace('editor2', {
    height: '108'
});
</script>

</html>