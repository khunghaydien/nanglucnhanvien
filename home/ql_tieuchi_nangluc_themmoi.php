<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Thêm mới đề đánh giá năng lực</title>
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
                                <div class="d_flex"> <a href='/quan_ly_tieu_chi_nang_luc.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Đề đánh giá năng lực<span> / </span><span> Thêm mới</span></p>
                                </div>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="body_ql_tieuchi themmoi_de_nangluc mb_10">
                                <div class="title_header ">
                                    <div class="d_flex"> <a href='/quan_ly_tieu_chi_nang_luc.html'
                                            class="img_quaylai mr_10">
                                            <img src="../img/icon_so.png" alt="Quay lại">
                                        </a>
                                        <p>Đề đánh giá năng lực<span> / </span><span> Thêm mới</span></p>
                                    </div>
                                </div>
                                <div class="header width_100">
                                    <h4>Thêm mới đề đánh giá năng lực</h4>
                                </div>
                                <!-- form thêm mới đề đánh giá năng lực -->
                                <form action="" method="" enctype="multipart/form-data"
                                    class="form form_them_tieuchi form_them_tieuchi_con">
                                    <div class="container">
                                        <div class="form_container">
                                            <div class="form_group">
                                                <label for="">Tên đề đánh giá năng lực<span
                                                        class="color_red">*</span></label>
                                                <input type="text" name="ten"
                                                    placeholder="Nhập tên đề đánh giá năng lực">
                                            </div>
                                            <div class="form_group form_group_block">
                                                <label for=""> Người tạo</label>
                                                <input type="text" name="ten" value="Nguyễn Trần Trung Quân">
                                            </div>
                                        </div>
                                        <div class="form_container">
                                            <div class="form_group form_group_block">
                                                <label for="">Ngày tạo</label>
                                                <input type="text" name="ten" value="10/10/2020">
                                            </div>
                                            <div class="form_group form_group_block">
                                                <label for="">Thang điểm <span class="color_red">*</span></label>
                                                <input type="text" name="thang_diem" value="100">
                                            </div>
                                        </div>
                                        <div class="form_group">
                                            <label for="">Ghi chú</label>
                                            <textarea id="editor1" name="editor1" cols="80" rows="10"></textarea>
                                        </div>
                                    </div>
                                </form>
                                <!--end form thêm mới đề đánh giá năng lực -->
                            </div>
                            <div class="d_flex space_b width_100 align_c color_blue mb_10">
                                <h4 class="font_ss16 font_wB">Tiêu chí đánh giá</h4>
                                <div class="btn_them_tieuchi d_flex align_c cursor_p">
                                    <div class="img">
                                        <img src="../img/cong.png" alt="Thêm tiêu chí">
                                    </div>
                                    <p class="font_s14 font_w5">Thêm tiêu chí</p>
                                </div>
                            </div>

                            <div class="bang_tieuchi_danhgia">
                                <div class="khoibang">
                                    <div class="bangchung">
                                        <table class="bangchinh tieu_chi">
                                            <tr>
                                                <th>
                                                    <p class="phantucon">STT</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Tên tiêu chí</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Thang điểm</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Chức năng</p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <div class="d_flex btn_soxuong">
                                                        <p class="mr_10 font_w5">Kiến thức</p>
                                                        <div class="img so_xoay">
                                                            <img src="../img/icon_so.png" alt="Sổ xuống">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td class="width_60">
                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                </td>
                                                <td>
                                                    <p>20</p>
                                                </td>
                                                <td>
                                                    <p class="color_red">Xóa</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p class="text_a_l"><span>Tổng điểm </span>
                                                        <span class="color_red"> (Tổng điểm chưa đạt 100 điểm)</span>
                                                    </p>
                                                </td>
                                                <td>20</td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="d_flex mb_20">
                                <h4 class="color_blue font_wB font_ss16 mr_20">
                                    Thiết lập phân loại đánh giá:
                                </h4>
                                <div class="d_flex align_c mr_30">
                                    <input type="radio" name="drone" id="radio_macdinh" value="macdinh" class="mr_5"
                                        class="check_dm" checked>
                                    <label for="huey">Mặc định</label>
                                </div>
                                <div class="d_flex align_c">
                                    <input type="radio" name="drone" id="radio_khac" value="khac" class="mr_5"
                                        class="check_dm">
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
                                            <p><span>0</span> <span class="mr_10 ml_14">-></span> <span>50</span></p>
                                        </li>
                                        <li class="item">
                                            <p>Trung bình:</p>
                                            <p><span>51</span> <span class="mr_10 ml_14">-></span> <span>60</span></p>
                                        </li>
                                        <li class="item">
                                            <p>Khá:</p>
                                            <p><span>61</span> <span class="mr_10 ml_14">-></span> <span>79</span></p>
                                        </li>
                                        <li class="item">
                                            <p>Giỏi:</p>
                                            <p><span>80</span> <span class="mr_10 ml_14">-></span> <span>90</span></p>
                                        </li>
                                        <li class="item">
                                            <p>Xuất sắc:</p>
                                            <p><span>90</span> <span class="mr_10 ml_14">-></span> <span>100</span></p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="body_ql_tieuchi phanloai_danhgia phanloai_danhgia_khac display_none">
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
                                                <input type="text" name="thang_diem" placeholder="Nhập số điểm">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include('../includes/dat_popup.php') ?>
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
$('.btn_them_tieuchi').click(function() {
    $('.popup_them_tieuchi').show();
})
</script>

</html>