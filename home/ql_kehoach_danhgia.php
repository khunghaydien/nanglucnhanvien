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
    <div id="" class="ql_kehoach_danhgia">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header">
                                <p>Quản lý kế hoạch đánh giá</p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="header_ql_tieuchi width_100 mb_20">
                                <div class="title_header">
                                    <p>Quản lý kế hoạch đánh giá</p>
                                </div>
                                <div class="d_flex space_b align_c mb_20 width_100">
                                    <div class="header_kehoach d_flex width_100 " id="header_kehoach">
                                        <div class="select_no_muti select_no_muti_3 mr_15">
                                            <select class="js_select_2" name="loai_tc">
                                                <option value="">Thời gian đánh giá: 12/05 - 12/07/2021 </option>
                                            </select>
                                        </div>
                                        <div class="d_flex space_b sel_huongdan width_100 ">
                                            <div class="select_no_muti select_no_muti_2 ">
                                                <select class="js_select_2" name="loai_tc">
                                                    <option value="">Tất cả trạng thái </option>
                                                    <option value="">Đã duyệt</option>
                                                    <option value="">Đóng</option>
                                                </select>
                                            </div>
                                            <a href="/huong_dan.html" class="huong_dan d_flex align_c">
                                                <img src="../img/chamhoi.png" alt="Hướng đẫn" class="mr_6">
                                                <p class="font_s15 font_w5 color_blue">Hướng dẫn</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tieuchi_themmoi d_flex space_b align_c">
                                    <div class="thanh_search ql_tieuchi">
                                        <input type="text" class="search_item font_s14 color_gray"
                                            placeholder="Tìm kiếm theo tên kế hoạch">
                                        <span class="see_search"></span>
                                    </div>
                                    <div class="them_moi ">
                                        <a href='/quan_ly_ke_hoach_danh_gia_them_moi.html' class="btn btn_xanh">
                                            <img src="../img/icon_plus.png" alt="Thêm mới" class="mr_10">
                                            <p>Thêm mới</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="body_ql_tieuchi body_kehoach_danhgia">
                                <div class="khoibang">
                                    <div class="bangchung" id="bang_chung">
                                        <table class="bangchinh tieu_chi">
                                            <tr>
                                                <th>
                                                    <p class="phantucon">STT</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Tên kế hoạch đánh giá</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Loại</p>
                                                </th>

                                                <th>
                                                    <p class="phantucon">Trạng thái</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Người tạo</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Người đánh giá</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Số người được đánh giá</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Thời gian</p>
                                                </th>
                                                <th>
                                                    <p class="phantucon">Tiến độ</p>
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
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chi_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>

                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>

                                                <td>
                                                    <p class="cho_duyet color_y">Chờ duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="img mr_10">
                                                            <img src="../img/avt1.png" alt="Người tạo">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <p>0%</p>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Ghi chú 1</p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chi_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>
                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>
                                                <td>
                                                    <p class="da_duyet color_blue">Đã duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="container">
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <div class="tien_do tien_do_50 ">
                                                                <p>50%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Tích hợp tất cả các ứng dụng doanh nghiệp
                                                        của bạn
                                                        đang cần trên một nền tảng duy nhất.
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chit_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>
                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>
                                                <td>
                                                    <p class="da_duyet color_blue">Đã duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="container">
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <div class="tien_do tien_do_50 ">
                                                                <p>50%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Tích hợp tất cả các ứng dụng doanh nghiệp
                                                        của bạn
                                                        đang cần trên một nền tảng duy nhất.
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chi_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>
                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>
                                                <td>
                                                    <p class="da_duyet color_blue">Đã duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="container">
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <div class="tien_do tien_do_50 ">
                                                                <p>50%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Tích hợp tất cả các ứng dụng doanh nghiệp
                                                        của bạn
                                                        đang cần trên một nền tảng duy nhất.
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chi_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>
                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>
                                                <td>
                                                    <p class="da_duyet color_blue">Đã duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="container">
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="plus_10">
                                                                10
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <div class="tien_do tien_do_50 ">
                                                                <p>50%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Tích hợp tất cả các ứng dụng doanh nghiệp
                                                        của bạn
                                                        đang cần trên một nền tảng duy nhất.
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>1</p>
                                                </td>
                                                <td>
                                                    <p class="text_a_l"> <a class="color_blue"
                                                            href="/quan_ly_ke_hoach_danh_gia_chi_tiet.html">Mẫu đánh
                                                            giá nhân viên 1</a></p>
                                                </td>
                                                <td>
                                                    <p>Đề kiểm tra</p>
                                                </td>
                                                <td>
                                                    <p class="da_duyet color_blue">Đã duyệt</p>
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
                                                    <div class="nguoi_danhgia text_a_l">
                                                        <div class="container">
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                            <div class="img ">
                                                                <img src="../img/avt1.png" alt="Người tạo">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text_a_r">100</td>
                                                <td>
                                                    <p class="tu_ngay">
                                                        <span
                                                            class="font_w5 color_blue mr_18">Từ:</span><span>10/10/2020</span>
                                                    </p>
                                                    <p class="den_ngay">
                                                        <span
                                                            class="font_w5 color_red mr_10">Đến:</span><span>10/10/2020</span>
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c">
                                                        <div class="thanh_tien_do text_a_c">
                                                            <div class="tien_do tien_do_50 ">
                                                                <p>50%</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="ghi_chu">
                                                    <p class="text_a_l"> Tích hợp tất cả các ứng dụng doanh nghiệp
                                                        của bạn
                                                        đang cần trên một nền tảng duy nhất.
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d_flex content_c position_r">
                                                        <div class="btn_tuychinh d_flex">
                                                            <div class="img mr_5">
                                                                <img src="../img/tuy_chinh.png" alt="Tùy chỉnh">
                                                            </div>
                                                            <p class="font_w5 color_blue">Tùy chỉnh</p>
                                                        </div>
                                                        <div class="modal_d modal_ql_tieuchi sub_tuychinh position_a ">
                                                            <div>
                                                                <div class="item btn_duyet">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_1.png"
                                                                                alt="Tùy chỉnh">
                                                                        </div>
                                                                        <p>Duyệt kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_tuchoi">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_2.png"
                                                                                alt="Từ chối hoạch đánh giá">
                                                                        </div>
                                                                        <p>Từ chối hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_3.png"
                                                                                alt="Chỉnh sửa kế hoạch đánh giá">
                                                                        </div>
                                                                        <a class="color_b"
                                                                            href="/quan_ly_ke_hoach_danh_gia_chinh_sua.html">Chỉnh
                                                                            sửa kế hoạch đánh giá</a>
                                                                    </div>
                                                                </div>
                                                                <div class="item btn_xoa">
                                                                    <div class="d_flex">
                                                                        <div class="img mr_10">
                                                                            <img src="../img/tuychinh_4.png"
                                                                                alt="Xóa kế hoạch đánh giá">
                                                                        </div>
                                                                        <p>Xóa kế hoạch đánh giá</p>
                                                                    </div>
                                                                </div>
                                                            </div>
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

    <!-- popup duyet-->
    <div class="popup popup_500 popup_duyet ">
        <div class="container">
            <div class="content">
                <div class="popup_header">
                    <h4 class="name_header">Duyệt kế hoạch đánh giá</h4>
                    <div class="img close_popup">
                        <img src="../img/close.png" alt="đóng">
                    </div>
                </div>
                <div class="popup_body">
                    <p class="cont_1"> Bạn có chắc chắn muốn phê duyệt kế hoạch đánh giá </br>
                        <span class="font_wB">
                            Kế hoạch đánh giá 1</span> ?
                    </p>
                    <div class="popup_btn">
                        <div class="btn btn_trang btn_140 mr_68  close_popup">Hủy</div>
                        <div class="btn btn_xanh btn_140">
                            Đồng ý
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup duyet -->

    <!-- popup từ chối -->
    <div class="popup popup_500 popup_tuchoi ">
        <div class="container">
            <div class="content">
                <div class="popup_header">
                    <h4 class="name_header">Từ chối kế hoạch đánh giá</h4>
                    <div class="img close_popup">
                        <img src="../img/close.png" alt="đóng">
                    </div>
                </div>
                <div class="popup_body">
                    <p class="cont_1"> Bạn có chắc chắn muốn từ chối kế hoạch đánh giá </br><span class="font_wB">
                            Kế hoạch đánh giá 1</span> ?</p>
                    <div class="popup_btn">
                        <div class="btn btn_trang btn_140 mr_68  close_popup">Hủy</div>
                        <div class="btn btn_xanh btn_140">
                            Đồng ý
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup từ chối-->

    <!-- popup xóa -->
    <div class="popup popup_500 popup_xoa ">
        <div class="container">
            <div class="content">
                <div class="popup_header">
                    <h4 class="name_header">Xóa kế hoạch đánh giá</h4>
                    <div class="img close_popup">
                        <img src="../img/close.png" alt="đóng">
                    </div>
                </div>
                <div class="popup_body">
                    <p class="cont_1"> Bạn có chắc chắn muốn xóa kế hoạch đánh giá </br><span class="font_wB">
                            Kế hoạch đánh giá 1</span> ?</p>
                    <div class="popup_btn">
                        <div class="btn btn_trang btn_140 mr_68  close_popup">Hủy</div>
                        <div class="btn btn_xanh btn_140">
                            Đồng ý
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup xóa-->

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

    <!-- popup thành viên -->
    <!-- popup duyet-->

    <div class="popup popup_680 popup_thanhvien ">
        <div class="container">
            <div class="content">
                <div class="popup_header">
                    <h4 class="name_header">Người đánh giá</h4>
                    <div class="img close_popup">
                        <img src="../img/close.png" alt="đóng">
                    </div>
                </div>
                <div class="popup_body">
                    <div class="khoibang khoibang_2">
                        <div class="bangchung bangchung_2">
                            <table class="bangchinh tieu_chi">
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>1</p>
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
                                        <p class="text_a_l">Phòng nhân sự</p>
                                    </td>
                                    <td>
                                        <p>Nhân viên</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end popup duyet -->
    <!-- popup thành viên -->

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
$('.btn_duyet').click(function() {
    $('.popup_duyet').show();
})
$('.btn_tuchoi').click(function() {
    $('.popup_tuchoi').show();
})
$('.btn_xoa').click(function() {
    $('.popup_xoa').show();
})
$('.plus_10').click(function() {
    $('.popup_thanhvien ').show();
})
</script>

</html>