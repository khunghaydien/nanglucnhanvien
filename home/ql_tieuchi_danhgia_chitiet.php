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
    <div id="ql_tieuchi_them_sua" class="ql_tieuchi">
        <div class="wapper color_b">
            <div class="d_flex">
                <? include('../includes/cd_sidebar.php'); ?>
                <div class="main">
                    <div class="header back_w border_r10 w_100">
                        <div class="box_header d_flex space_b align_c position_r">
                            <div class="title_header d_flex">
                                <a href='/quan_ly_tieu_chi_danh_gia.html' class="img_quaylai mr_10">
                                    <img src="../img/icon_so.png" alt="Quay lại">
                                </a>
                                <p>Danh sách lý tiêu chí đánh giá <span> / </span><span> Chi tiết</span></p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <div class="header_ql_tieuchi">
                                <div class="d_flex align_c flex_end mb_20">
                                    <div class="btn_header_ql_tieuchi d_flex">
                                        <div class="btn sua">
                                            <div class="img mr_12">
                                                <img src="../img/icon_but.png" alt="Chỉnh sửa">
                                            </div>
                                            <p>Chỉnh sửa</p>
                                        </div>
                                        <div class="btn excel">
                                            <div class="img mr_12">
                                                <img src="../img/icon_excel.png" alt="File excel">
                                            </div>
                                            <p>Xuất excel</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="body_ql_tieuchi body_ql_tieuchi_chitiet">
                                <div class="header width_100">
                                    <h4>Thêm mới tiêu chí</h4>
                                </div>
                                <div class="body width_100">
                                    <ul class="thongtin_tieuchi">
                                        <li class="item">
                                            <p>Tên tiêu chí:</p>
                                            <p>Kỹ năng</p>
                                        </li>
                                        <li class="item">
                                            <p>Loại tiêu chí:</p>
                                            <p>Tiêu chí tổng hợp</p>
                                        </li>
                                        <li class="item">
                                            <p>Trạng thái:</p>
                                            <p> <label class="switch_tatmo">
                                                    <input type="checkbox" checked>
                                                    <span class="slider round"></span>
                                                </label></p>
                                        </li>
                                        <li class="item">
                                            <p>Người tạo:</p>
                                            <p> Mặc định</p>
                                        </li>
                                        <li class="item">
                                            <p>Ngày tạo:</p>
                                            <p>10/10/2020</p>
                                        </li>
                                        <li class="item">
                                            <p>Thang điểm:</p>
                                            <p>10</p>
                                        </li>
                                        <li class="item ghi_chu">
                                            <p>Ghi chú:</p>
                                            <p>Là năng lực thực hiện các công việc, biến kiến thức thành hành động.
                                                Thông thường kỹ năng được chia thành các cấp độ chính như: bắt chước
                                                (quan sát và hành vi khuôn mẫu), ứng dụng (thực hiện một số hành động
                                                bằng cách làm theo hướng dẫn), vận dụng (chính xác hơn với mỗi hoàn
                                                cảnh), vận dụng sáng tạo (trở thành phản xạ tự nhiên).</p>
                                        </li>
                                    </ul>
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
</script>

</html>