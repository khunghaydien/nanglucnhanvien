<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Quản lý kế hoạch đánh giá</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dat.css">
</head>

<body>
    <div id="" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header">
                                <div class="d_flex"> <a href='/quan_ly_ke_hoach_danh_gia.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Quản lý kế hoạch đánh giá <span> / </span><span> Thêm mới </span></p>
                                </div>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body main_body_1">
                            <div class="title_header">
                                <div class="d_flex"> <a href='/quan_ly_ke_hoach_danh_gia.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Quản lý kế hoạch đánh giá <span> / </span><span> Thêm mới </span></p>
                                </div>
                            </div>
                            <form action="" method="" id="vi_du">
                                <div class="container_them_buoc_dau">
                                    <div class="header_them_kehoach header_them_kehoach_buoc_dau">
                                        <div class="container_img_1">
                                            <div class="container_img ">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_4.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_2 display_none">
                                            <div class="container_img ">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_7.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_3 display_none">
                                            <div class="container_img ">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_4.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_7.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="them_buoc_dau">
                                        <div class="form body_ql_tieuchi">
                                            <div class="header_d width_100">
                                                <h4>Thêm mới kế hoạch đánh giá</h4>
                                            </div>
                                            <div class="body width_100">
                                                <div class="container">
                                                    <div class="form_container form_container_3">
                                                        <div class="form_group width_50">
                                                            <label for="">Tên kế hoạch đánh giá<span
                                                                    class="color_red">*</span></label>
                                                            <input type="text" name="ten"
                                                                placeholder="Nhập tên kế hoạch đánh giá">
                                                        </div>
                                                        <div class="mot_nua d_flex space_b width_50">
                                                            <div class="form_group form_group_block  width_50">
                                                                <label for="">Người tạo</label>
                                                                <input type="text" name="nguoi_tao"
                                                                    placeholder="Nhập tên người tạo"
                                                                    value="Nguyễn Trần Trung Quân">
                                                            </div>
                                                            <div class="form_group form_group_block width_50">
                                                                <label for="">Ngày tạo</label>
                                                                <input type="text" name="ngay_tao" value="10/10/2020"
                                                                    placeholder="Nhập ngày tạo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_container">
                                                        <div class="form_group width_50">
                                                            <label for="">Loại đánh giá<span
                                                                    class="color_red">*</span></label>
                                                            <div class="select_no_muti">
                                                                <select class="js_select_2" name="loai_de" id="loai_de">
                                                                    <option value="1">Đề đánh giá</option>
                                                                    <option value="2">Đề kiểm tra</option>
                                                                    <option value="3">Đề đánh giá và đề kiểm tra
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form_group width_50">
                                                            <label for="">Đánh giá lặp lại</label>
                                                            <div class="select_no_muti">
                                                                <select class="js_select_2" name="lap_lai">
                                                                    <option value="">Không lặp lại</option>
                                                                    <option value="">Lặp lại</option>
                                                                    <option value="">Lặp lại hàng tuần</option>
                                                                    <option value="">Lặp lại hàng ngày</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form_container form_container_4">
                                                        <div class="form_group">
                                                            <label for="">Ngày bắt đầu kế hoạch <span
                                                                    class="color_red">*</span></label>
                                                            <input type="date" name="ngay_batdau"
                                                                placeholder="10/10/2020">
                                                        </div>
                                                        <div class="form_group">
                                                            <label for="">Ngày kết thúc kế hoạch <span
                                                                    class="color_red">*</span></label>
                                                            <input type="date" name="ngay_ketthuc"
                                                                placeholder="10/10/2020">
                                                        </div>
                                                        <div class="form_group">
                                                            <label for="">Giờ bắt đầu đánh giá<span
                                                                    class="color_red">*</span></label>
                                                            <input type="time" name="gio_batdau">
                                                        </div>
                                                        <div class="form_group">
                                                            <label for="">Giờ kết thúc đánh giá<span
                                                                    class="color_red">*</span></label>
                                                            <input type="time" name="gio_ketthuc">
                                                        </div>

                                                    </div>
                                                    <div class="form_group">
                                                        <label for="">Ghi chú</label>
                                                        <textarea id="editor1" name="ghi_chu" cols="80"
                                                            rows="10"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="btn_de_danhgia_1 d_flex content_c mt_25">
                                                <div class="btn_huy btn btn_168 btn_trang mr_68">
                                                    Hủy
                                                </div>
                                                <div class="btn_tieptuc_1 btn btn_168 btn_xanh ">
                                                    <div class="d_flex align_c ">
                                                        <p class="mr_10">Tiếp tục</p>
                                                        <div class="img height_15">
                                                            <img src="../img/next_trang.png" alt="Tiếp tục">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container_them_buoc_2 display_none">
                                    <div class="header_them_kehoach header_them_kehoach_buoc_2" id="lo">
                                        <div class="container_img_1 display_none" id="lo1">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_2.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_2 display_none" id="lo2">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_8.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_3 display_none" id="lo3">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_2.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_7.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="them_danhgia_buoc2 display_none" id="lo4">
                                        <div class="body_them_kehoach">
                                            <div class="d_flex align_c color_blue mb_20 ">
                                                <h4 class="font_ss16 font_wB mr_10">Đề đánh giá năng lực:</h4>
                                                <div class="select_no_muti select_no_muti_2 ">
                                                    <select class="js_select_2" name="loai_tc">
                                                        <option value="">Chọn đề đánh giá năng lực </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                    </select>
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
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <div class="d_flex btn_soxuong">
                                                                        <p class="mr_10 font_w5">Kiến thức</p>
                                                                        <div class="img so_xoay">
                                                                            <img src="../img/icon_so.png"
                                                                                alt="Sổ xuống">
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td class="width_80">
                                                                    <p class="text_a_l">Hiểu biết thấu đáo</p>
                                                                </td>
                                                                <td>
                                                                    <p>20</p>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <p class="text_a_l font_w5">Tổng điểm
                                                                    </p>
                                                                </td>
                                                                <td>20</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="body_ql_tieuchi phanloai_danhgia">
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
                                        </div>
                                    </div>

                                    <div class="them_kiemtra_buoc2 display_none" id="lo5">
                                        <div class="body_them_kehoach">
                                            <div class="d_flex align_c color_blue mb_20 ">
                                                <h4 class="font_ss16 font_wB mr_10">Đề kiểm tra năng lực:</h4>
                                                <div class="select_no_muti select_no_muti_2 ">
                                                    <select class="js_select_2" name="loai_tc">
                                                        <option value="">Chọn đề kiểm tra năng lực</option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cauhoi_chitiet de_1 mb_20">
                                                <p class="mb_20"><span class="font_s15 font_w5 mr_10">Văn bản hành chính
                                                        (Việt
                                                        Nam) là loại văn bản trong hệ thống văn bản của nước Cộng hòa xã
                                                        hội
                                                        chủ
                                                        nghĩa Việt Nam mang tính thông tin quy phạm Nhà nước, cụ thể hóa
                                                        việc
                                                        thi hành văn bản pháp quy, giải quyết những vụ việc cụ thể trong
                                                        khâu
                                                        quản lý. <span class="font_s14 font_w4">( 10 điểm
                                                            )</span></span>
                                                </p>
                                                <p class="font_s15 font_w5 mb_5"> Đáp án </p>
                                                <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong
                                                    hệ
                                                    thống
                                                    văn bản của nước Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông
                                                    tin
                                                    quy
                                                    phạm Nhà nước, cụ thể hóa việc thi hành văn bản pháp quy, giải quyết
                                                    những
                                                    vụ việc cụ thể trong khâu quản lý.</p>
                                            </div>
                                            <div class="cauhoi_chitiet de_1 mb_20">
                                                <p class="mb_20"><span class="font_s15 font_w5 mr_10">Văn bản hành chính
                                                        (Việt
                                                        Nam) là loại văn bản trong hệ thống văn bản của nước <span
                                                            class="font_s14 font_w4">( 10 điểm )</span></span>
                                                </p>
                                                <p class="font_s15 font_w5 mb_5"> Câu trả lời </p>
                                                <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong
                                                    hệ
                                                    thống
                                                    văn bản của nước Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông
                                                    tin
                                                    quy
                                                    phạm Nhà nước, cụ thể hóa việc thi hành văn bản pháp quy, giải quyết
                                                    những
                                                    vụ việc cụ thể trong khâu quản lý.</p>
                                            </div>
                                            <div class="body_ql_tieuchi phanloai_danhgia">
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
                                        </div>
                                    </div>

                                    <div class="btn_form_chip ">
                                        <div class="btn btn_168 btn_trang mr_68 ">
                                            Hủy
                                        </div>
                                        <div class="btn btn_168 btn_xanh mr_68 btn_quaylai_1">
                                            <div class="d_flex align_c ">
                                                <div class="img height_15 mr_10">
                                                    <img src="../img/pre_trang.png" alt="Quay lại">
                                                </div>
                                                <p>Quay lai</p>
                                            </div>
                                        </div>
                                        <div class="div_tieptuc btn_tieptuc_2">
                                            <div class="btn btn_168 btn_xanh ">
                                                <div class="d_flex align_c btn_tieptuc">
                                                    <p class="mr_10">Tiếp tục</p>
                                                    <div class="img height_15">
                                                        <img src="../img/next_trang.png" alt="Tiếp tục">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="container_them_buoc_3 display_none">
                                    <div class="header_them_kehoach header_them_kehoach_buoc_3">
                                        <div class="container_img_3">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right">
                                                    <img src="../img/xanh_2.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_8.png" alt="Bước 3">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_5.png" alt="Bước 4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="them_kiemtra_buoc3">
                                        <div class="body_them_kehoach">
                                            <div class="d_flex align_c color_blue mb_20 ">
                                                <h4 class="font_ss16 font_wB mr_10">Đề kiểm tra năng lực:</h4>
                                                <div class="select_no_muti select_no_muti_2 ">
                                                    <select class="js_select_2" name="loai_tc">
                                                        <option value="">Chọn đề kiểm tra năng lực</option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                        <option value="">Đề đánh giá 1 </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="cauhoi_chitiet de_1 mb_20">
                                                <p class="mb_20"><span class="font_s15 font_w5 mr_10">Văn bản hành chính
                                                        (Việt
                                                        Nam) là loại văn bản trong hệ thống văn bản của nước Cộng hòa xã
                                                        hội
                                                        chủ
                                                        nghĩa Việt Nam mang tính thông tin quy phạm Nhà nước, cụ thể hóa
                                                        việc
                                                        thi hành văn bản pháp quy, giải quyết những vụ việc cụ thể trong
                                                        khâu
                                                        quản lý. <span class="font_s14 font_w4">( 10 điểm
                                                            )</span></span>
                                                </p>
                                                <p class="font_s15 font_w5 mb_5"> Đáp án </p>
                                                <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong
                                                    hệ
                                                    thống
                                                    văn bản của nước Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông
                                                    tin
                                                    quy
                                                    phạm Nhà nước, cụ thể hóa việc thi hành văn bản pháp quy, giải quyết
                                                    những
                                                    vụ việc cụ thể trong khâu quản lý.</p>
                                            </div>
                                            <div class="cauhoi_chitiet de_1 mb_20">
                                                <p class="mb_20"><span class="font_s15 font_w5 mr_10">Văn bản hành chính
                                                        (Việt
                                                        Nam) là loại văn bản trong hệ thống văn bản của nước <span
                                                            class="font_s14 font_w4">( 10 điểm )</span></span>
                                                </p>
                                                <p class="font_s15 font_w5 mb_5"> Câu trả lời </p>
                                                <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong
                                                    hệ
                                                    thống
                                                    văn bản của nước Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông
                                                    tin
                                                    quy
                                                    phạm Nhà nước, cụ thể hóa việc thi hành văn bản pháp quy, giải quyết
                                                    những
                                                    vụ việc cụ thể trong khâu quản lý.</p>
                                            </div>
                                            <div class="body_ql_tieuchi phanloai_danhgia">
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
                                        </div>
                                        <div class="btn_form_chip">
                                            <div class="btn btn_168 btn_trang mr_68">
                                                Hủy
                                            </div>
                                            <div class="btn btn_168 btn_xanh mr_68 btn_quaylai_2 ">
                                                <div class="d_flex align_c  ">
                                                    <div class="img height_15 mr_10">
                                                        <img src="../img/pre_trang.png" alt="Quay lại">
                                                    </div>
                                                    <p>Quay lai</p>
                                                </div>
                                            </div>
                                            <div class="div_tieptuc">
                                                <div class="btn btn_168 btn_xanh btn_tieptuc_3 ">
                                                    <div class="d_flex align_c">
                                                        <p class="mr_10">Tiếp tục</p>
                                                        <div class="img height_15">
                                                            <img src="../img/next_trang.png" alt="Tiếp tục">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="container_them_buoc_cuoi display_none">
                                    <div class="header_them_kehoach header_them_kehoach_buoc_cuoi">
                                        <div class="container_img_1 display_none">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_2.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_3.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_2 display_none">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_8.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_3.png" alt="Bước 3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container_img_3 display_none">
                                            <div class="container_img">
                                                <div class="img">
                                                    <img src="../img/xanh_1.png" alt="Bước 1">
                                                </div>
                                                <div class="img img_right">
                                                    <img src="../img/xanh_2.png" alt="Bước 2">
                                                </div>
                                                <div class="img img_right img_xanh">
                                                    <img src="../img/xanh_8.png" alt="Bước 3">
                                                </div>
                                                <div class="img img_right img_xam">
                                                    <img src="../img/xanh_3.png" alt="Bước 4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="them_buoc_cuoi">
                                        <div class="d_flex space_b width_100 align_c color_blue mb_10">
                                            <div class="thiet_lap d_flex mb_20">
                                                <h4 class="color_blue font_wB font_ss16 mr_20">
                                                    Thiết lập phân loại đánh giá:
                                                </h4>
                                                <div class="container_thietlap">
                                                    <div class="d_flex align_c mr_30">
                                                        <input type="radio" name="drone" id="radio_macdinh"
                                                            value="nhanvien" class="mr_5" class="check_dm" checked>
                                                        <label for="huey">Nhân viên </label>
                                                    </div>
                                                    <div class="d_flex align_c">
                                                        <input type="radio" name="drone" id="radio_khac"
                                                            value="phongban" class="mr_5" class="check_dm">
                                                        <label for="dewey">Phòng ban</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nhanvien">
                                                <div class="d_flex align_c">
                                                    <div class="img themmoi_tieuchi ">
                                                        <img src="../img/cong.png" alt="Thêm tiêu chí">
                                                    </div>
                                                    <p class="font_s14 font_w5">Thêm nhân viên</p>
                                                </div>
                                            </div>
                                            <div class="phongban display_none ">
                                                <div class="d_flex align_c">
                                                    <div class="img themmoi_tieuchi ">
                                                        <img src="../img/cong.png" alt="Thêm tiêu chí">
                                                    </div>
                                                    <p class="font_s14 font_w5">Thêm phòng ban</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nhanvien">
                                            <div class="body_doituong body_doituong_nhan_danhgia">
                                                <div class="khoibang">
                                                    <div class="bangchung">
                                                        <table class="bangchinh tieu_chi">
                                                            <tr>
                                                                <th>
                                                                    <p class="phantucon">STT</p>
                                                                </th>
                                                                <th>
                                                                    <p class="phantucon">Mã NV</p>
                                                                </th>
                                                                <th>
                                                                    <p class="phantucon">Họ tên</p>
                                                                </th>
                                                                <th>
                                                                    <p class="phantucon">Phòng ban</p>
                                                                </th>
                                                                <th>
                                                                    <p class="phantucon">Chức vụ</p>
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
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p> NV0001</p>

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
                                                                    <p class="text_a_l">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l">Trưởng phòng</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="phongban display_none">
                                            <div class="body_doituong body_doituong_nhan_danhgia ">
                                                <div class="khoibang">
                                                    <div class="bangchung">
                                                        <table class="bangchinh tieu_chi">
                                                            <tr>
                                                                <th>
                                                                    <p class="phantucon">STT</p>
                                                                </th>
                                                                <th>
                                                                    <p class="phantucon">Phòn ban</p>
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
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p>1</p>
                                                                </td>
                                                                <td>
                                                                    <p class="text_a_l ">Phòng kinh doanh</p>
                                                                </td>
                                                                <td>
                                                                    <p class="color_red">xóa</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d_flex space_b width_100 align_c color_blue mb_10">
                                            <h4 class="font_ss16 font_wB">Người đánh giá:</h4>
                                            <div class="d_flex align_c">
                                                <div class="img themmoi_tieuchi ">
                                                    <img src="../img/cong.png" alt="Thêm tiêu chí">
                                                </div>
                                                <p class="font_s14 font_w5">Thêm người đánh giá</p>
                                            </div>
                                        </div>
                                        <div class="body_doituong body_doituong_nhan_danhgia">
                                            <div class="khoibang">
                                                <div class="bangchung">
                                                    <table class="bangchinh tieu_chi">
                                                        <tr>
                                                            <th>
                                                                <p class="phantucon">STT</p>
                                                            </th>
                                                            <th>
                                                                <p class="phantucon">Mã NV</p>
                                                            </th>
                                                            <th>
                                                                <p class="phantucon">Họ tên</p>
                                                            </th>
                                                            <th>
                                                                <p class="phantucon">Phòng ban</p>
                                                            </th>
                                                            <th>
                                                                <p class="phantucon">Chức vụ</p>
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
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p> NV0001</p>

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
                                                                <p class="text_a_l">Phòng kinh doanh</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l">Trưởng phòng</p>
                                                            </td>
                                                            <td>
                                                                <p class="color_red">xóa</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn_form_chip">
                                            <div class="btn btn_168 btn_trang mr_68">
                                                Hủy
                                            </div>
                                            <div class="btn btn_168 btn_xanh mr_68 btn_quaylai_3 ">
                                                <div class="d_flex align_c ">
                                                    <div class="img height_15 mr_10">
                                                        <img src="../img/pre_trang.png" alt="Quay lại">
                                                    </div>
                                                    <p>Quay lai</p>
                                                </div>
                                            </div>
                                            <div class="div_tieptuc">
                                                <button type="submit" class="btn btn_168 btn_xanh ">
                                                    <div class="d_flex align_c ">
                                                        <p>Lưu</p>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/jquery.validate.min.js"></script>
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
$('#loai_de').change(function() {
    var de_kiemtra = $(this).val();
    if (de_kiemtra == 1) {
        $('.container_img_1').removeClass('display_none');
        $('.container_img_2').addClass('display_none');
        $('.container_img_3').addClass('display_none');
    }
    if (de_kiemtra == 2) {
        $('.container_img_1').addClass('display_none');
        $('.container_img_2').removeClass('display_none');
        $('.container_img_3').addClass('display_none');

    }
    if (de_kiemtra == 3) {
        $('.container_img_1').addClass('display_none');
        $('.container_img_2').addClass('display_none');
        $('.container_img_3').removeClass('display_none');
    }
})

$(".btn_tieptuc_1").click(function() {
    var vi_du = $("#vi_du");
    vi_du.validate({
        rules: {
            ten: {
                required: true,
            },
            ngay_batdau: {
                required: true,
            },
            ngay_ketthuc: {
                required: true,
            },
            gio_batdau: {
                required: true,
            },
            gio_ketthuc: {
                required: true,
            },

        },
        messages: {
            ten: {
                required: "Không để trống",
            },
            ngay_batdau: {
                required: "Không để trống",
            },
            ngay_ketthuc: {
                required: "Không để trống",
            },
            gio_batdau: {
                required: "Không để trống",
            },
            gio_ketthuc: {
                required: "Không để trống",
            },
        }
    });
    if (vi_du.valid() === true) {
        if ($('.container_them_buoc_dau').is(":visible")) {
            var loai_dg = $("#loai_de").val();
            if (loai_dg == 1) {
                current_fs = $('.container_them_buoc_dau');
                next_fs1 = $('.container_them_buoc_2');
                next_fs = $('.container_them_buoc_2 #lo #lo1');
                next_fs2 = $('.container_them_buoc_2 #lo4');
            } else if (loai_dg == 2) {
                current_fs = $('.container_them_buoc_dau');
                next_fs1 = $('.container_them_buoc_2');
                next_fs = $('.container_them_buoc_2 #lo #lo2');
                next_fs2 = $('.container_them_buoc_2 #lo5');
            } else if (loai_dg == 3) {
                current_fs = $('.container_them_buoc_dau');
                next_fs1 = $('.container_them_buoc_2');
                next_fs = $('.container_them_buoc_2 #lo #lo3');
                next_fs2 = $('.container_them_buoc_2 #lo4');
            }
        }
        next_fs1.removeClass("display_none");
        next_fs.removeClass("display_none");
        next_fs2.removeClass("display_none");
        current_fs.addClass('display_none');
        return false;
    }
})

$(".btn_tieptuc_2").click(function() {
    if ($('#lo #lo1').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_cuoi').removeClass('display_none');
        $('.container_them_buoc_cuoi .container_img_1').removeClass('display_none');
    } else if ($('#lo #lo2').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_cuoi').removeClass('display_none');
        $('.container_them_buoc_cuoi .container_img_2').removeClass('display_none');
    } else if ($('#lo #lo3').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_3').removeClass('display_none');
    }
})

$(".btn_tieptuc_3").click(function() {
    $('.container_them_buoc_3').addClass('display_none');
    $('.container_them_buoc_cuoi').removeClass('display_none');
    $('.container_them_buoc_cuoi .container_img_3').removeClass('display_none');
})

$(".btn_quaylai_3").click(function() {
    if ($('.container_them_buoc_cuoi .container_img_1').is(":visible")) {
        $('.container_them_buoc_2').removeClass('display_none');
        $('.container_them_buoc_cuoi').addClass('display_none');
        $('.container_them_buoc_2 #lo #lo1').removeClass('display_none');
        $('.container_them_buoc_2 #lo4').removeClass('display_none');

    } else if ($('.container_them_buoc_cuoi .container_img_2').is(":visible")) {
        $('.container_them_buoc_2').removeClass('display_none');
        $('.container_them_buoc_cuoi').addClass('display_none');
        $('.container_them_buoc_2 #lo #lo2').removeClass('display_none');
        $('.container_them_buoc_2 #lo5').removeClass('display_none');

    } else if ($('.container_them_buoc_cuoi .container_img_3').is(":visible")) {
        $('.container_them_buoc_cuoi').addClass('display_none');
        $('.container_them_buoc_3').removeClass('display_none');

    }
})

$(".btn_quaylai_2").click(function() {
    $('.container_them_buoc_3').addClass('display_none');
    $('.container_them_buoc_2').removeClass('display_none');
    $('.container_them_buoc_2 #lo #lo3').removeClass('display_none');
    $('.container_them_buoc_2 #lo4').removeClass('display_none');
})

$(".btn_quaylai_1").click(function() {
    if ($('.container_them_buoc_2 .container_img_1').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_dau').removeClass('display_none');

    } else if ($('.container_them_buoc_2 .container_img_2').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_dau').removeClass('display_none');
        $('.container_them_buoc_dau .container_img_2').removeClass('display_none');
        $('.container_them_buoc_dau .container_img_1').addClass('display_none');

    } else if ($('.container_them_buoc_2 .container_img_3').is(":visible")) {
        $('.container_them_buoc_2').addClass('display_none');
        $('.container_them_buoc_dau').removeClass('display_none');
        $('.container_them_buoc_dau .container_img_3').removeClass('display_none');
        $('.container_them_buoc_dau .container_img_1').addClass('display_none');
    }
})

$('input[type="radio"]').click(function() {
    if ($(this).val() == "nhanvien") {
        $('.nhanvien').addClass('display_none');
        $('.phongban').removeClass('display_none');
    } else {
        $('.nhanvien').addClass('display_none');
        $('.phongban').removeClass('display_none');
    }
})
</script>

</html>