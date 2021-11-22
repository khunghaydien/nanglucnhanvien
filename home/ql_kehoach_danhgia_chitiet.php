<!-- Trang này bao gồm 
-đối tương nhận đánh giá là: 
nhân viên 
phòng ban( ẩn )
-Trang thái :
đã duyệt(ẩn)
chưa duyệt 
từ chối(ẩn)
-->

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Chi tiết tiêu chí đánh giá</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/dat.css">
</head>

<body>
    <div id="ql_kehoach_chitiet" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header ">
                                <div class="d_flex"> <a href='/quan_ly_ke_hoach_danh_gia.html'
                                        class="img_quaylai mr_10">
                                        <img src="../img/icon_so.png" alt="Quay lại">
                                    </a>
                                    <p>Quản lý kế hoạch đánh giá <span> / </span><span> Chi tiết</span></p>
                                </div>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="header_ql_tieuchi">
                                <div class="title_header ">
                                    <div class="d_flex"> <a href='/quan_ly_ke_hoach_danh_gia.html'
                                            class="img_quaylai mr_10">
                                            <img src="../img/icon_so.png" alt="Quay lại">
                                        </a>
                                        <p>Quản lý kế hoạch đánh giá <span> / </span><span> Chi tiết</span></p>
                                    </div>
                                </div>
                                <div class="dai_vai d_flex align_c flex_end mb_20">
                                    <div class="btn_header_ql_tieuchi d_flex">
                                        <div class="div_tuchoi">
                                            <div class="btn btn_xanh btn_tuchoi mr_15">
                                                <div class="img mr_12">
                                                    <img src="../img/x.png" alt="Từ chối">
                                                </div>
                                                <p>Từ chối</p>
                                            </div>
                                        </div>
                                        <div class="div_duyet">
                                            <div class="btn btn_xanh btn_duyet mr_15">
                                                <div class="img mr_12">
                                                    <img src="../img/duyet.png" alt="Duyệt">
                                                </div>
                                                <p>Duyệt</p>
                                            </div>
                                        </div>
                                        <div class="div_xoa">
                                            <div class="btn btn_trang btn_xoa_kh mr_15">
                                                <p class="color_blue">Xóa kế hoạch</p>
                                            </div>
                                        </div>
                                        <div class="sua_ahaha">
                                            <a href="" class="btn sua">
                                                <div class="img mr_12">
                                                    <img src="../img/icon_but.png" alt="Chỉnh sửa">
                                                </div>
                                                <p>Chỉnh sửa</p>
                                            </a>
                                        </div>
                                        <div class="div_excel">
                                            <div class="btn excel">
                                                <div class="img mr_12">
                                                    <img src="../img/icon_excel.png" alt="File excel">
                                                </div>
                                                <p>Xuất excel</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="body_ql_tieuchi body_kehoach_chitiet">
                                    <div class="header_d width_100">
                                        <h4>Thông tin kế hoạch đánh giá</h4>
                                    </div>
                                    <div class="body width_100 mb_20">
                                        <ul class="thongtin_tieuchi">
                                            <li class="item">
                                                <p>Tên kế hoạch:</p>
                                                <p>Kế hoạch đánh giá nhân viên 1</p>
                                            </li>
                                            <li class="item">
                                                <p>Loại đánh giá:</p>
                                                <p>Đề đánh giá</p>
                                            </li>
                                            <li class="item">
                                                <p>Thang điểm:</p>
                                                <p> 100</p>
                                            </li>
                                            <li class="item">
                                                <p>Số tiêu chí:</p>
                                                <p> 10</p>
                                            </li>
                                            <li class="item">
                                                <p>Người tạo:</p>
                                                <div class="d_flex flex_start ml_20 width_100">
                                                    <div class="d_flex align_c">
                                                        <div class="img mr_10">
                                                            <img src="../img/avt1.png" alt="Người tạo">
                                                        </div>
                                                        <p class="width_100">Nguyễn Trần Trung Quân</p>
                                                    </div>
                                                </div>

                                            </li>
                                            <li class="item">
                                                <p>Ngày tạo:</p>
                                                <p>10/10/2020</p>
                                            </li>
                                            <li class="item">
                                                <p>Trạng thái:</p>
                                                <!-- <p class="trang_thai cho_duyet color_blue">Chờ duyệt</p> -->
                                                <p class="trang_thai da_duyet color_green ">Đã duyệt</p>
                                                <!-- <p class="trang_thai tu_choi color_y  ">Từ chối </p>  -->
                                            </li>
                                            <li class="item">
                                                <p>Người duyệt:</p>

                                            </li>
                                            <li class="item">
                                                <p>Ngày duyệt:</p>

                                            </li>
                                            <li class="item">
                                                <p>Ngày bắt đầu kế hoạch:</p>
                                                <p>10/10/2020</p>
                                            </li>
                                            <li class="item">
                                                <p>Ngày kết thúc kế hoạch:</p>
                                                <p>10/10/2020</p>
                                            </li>
                                            <li class="item">
                                                <p>Giờ bắt đầu đánh giá:</p>
                                                <p>10:10</p>
                                            </li>
                                            <li class="item">
                                                <p>Giờ kết thúc đánh giá:</p>
                                                <p>10:10</p>
                                            </li>
                                            <li class="item">
                                                <p>Đánh giá lặp lại:</p>
                                                <p>Không lặp lại</p>
                                            </li>
                                            <li class="item ghi_chu">
                                                <p>Ghi chú:</p>
                                                <p>Ghi chú 1</p>
                                            </li>

                                        </ul>
                                    </div>

                                    <div class="container_cum_de container_cum_de_1">
                                        <div class="d_flex space_b width_100 align_c color_blue mb_20">
                                            <h4 class="show_de font_ss16 font_wB cursor_p">Đề đánh giá 1</h4>
                                        </div>

                                        <div class="hoi_dap mb_20">
                                            <p class="font_s15 font_w5 mb_20"> Văn bản hành chính (Việt Nam) là loại văn
                                                bản
                                                trong hệ
                                                thống
                                                văn bản
                                                của nước
                                                Cộng
                                                hòa xã hội chủ nghĩa Việt Nam mang tính thông tin quy phạm Nhà nước, cụ
                                                thể
                                                hóa
                                                việc
                                                thi hành văn bản pháp quy, giải quyết những vụ việc cụ thể trong khâu
                                                quản
                                                lý.
                                                <span class="font_wn font_s14">( 10 điểm )</span>
                                            </p>
                                            <p class="font_s15 font_w5 mb_5">Đáp án</p>
                                            <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong hệ
                                                thống
                                                văn
                                                bản của nước
                                                Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông tin quy phạm Nhà
                                                nước, cụ
                                                thể
                                                hóa việc thi hành văn bản pháp quy, giải quyết những vụ việc cụ thể
                                                trong
                                                khâu
                                                quản lý.</p>
                                        </div>
                                        <div class="hoi_dap mb_20">
                                            <p class="font_s15 font_w5 mb_20">Văn bản hành chính (Việt Nam) là loại văn
                                                bản
                                                trong hệ thống văn bản của nước
                                                <span class="font_wn font_s14">( 10 điểm )</span>
                                            </p>
                                            <p class="font_s15 font_w5 mb_5">Đáp án</p>
                                            <p class="font_s14">Văn bản hành chính (Việt Nam) là loại văn bản trong hệ
                                                thống
                                                văn
                                                bản của nước Cộng hòa xã hội chủ nghĩa Việt Nam mang tính thông tin quy
                                                phạm
                                                Nhà
                                                nước, cụ thể hóa việc thi hành văn bản pháp quy, giải quyết những vụ
                                                việc cụ
                                                thể
                                                trong khâu quản lý.</p>
                                        </div>

                                        <div class="bang_tieuchi_danhgia ">
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
                                                                <p class="text_a_l font_w5">Kiến thức</p>
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
                                    </div>
                                    <div class="body_ql_tieuchi phanloai_danhgia phanloai_danhgia_macdinh mb_20 ">
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

                                    <div class="nhanvien">
                                        <p class="color_blue font_wB font_ss16 mb_20">Đối tượng nhận đánh giá</p>

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
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="phongban display_none">
                                        <p class="color_blue font_wB font_ss16 mb_20">Đối tượng nhận đánh giá</p>
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
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p>1</p>
                                                            </td>
                                                            <td>
                                                                <p class="text_a_l ">Phòng kinh doanh</p>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="color_blue font_wB font_ss16 mb_20">Người đánh giá</p>

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
                                                    </tr>
                                                </table>
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
// window.onload = function() {
// if ($('#ql_kehoach_chitiet').hasClass('da_duyet')) {
//     $('.btn_duyet').addClass('opasity');
// })
// })
window.onload = function() {
    if ($('.trang_thai').hasClass('da_duyet')) {
        $('.btn_duyet').addClass('opasity');
    }
}
</script>

</html>