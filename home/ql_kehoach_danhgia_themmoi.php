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
                            <form action="">
                                <div class="header_them_kehoach d_flex content_c align_c mb_20">
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
                                <div class="body_them_kehoach">
                                    <div class="form body_ql_tieuchi">
                                        <div class="header_d width_100">
                                            <h4>Thêm mới kế hoạch đánh giá</h4>
                                        </div>
                                        <div class="body width_100">
                                            <div class="container">
                                                <div class="form_container">
                                                    <div class="form_group width_50">
                                                        <label for="">Tên kế hoạch đánh giá<span
                                                                class="color_red">*</span></label>
                                                        <input type="text" name="ten"
                                                            placeholder="Nhập tên kế hoạch đánh giá">
                                                    </div>
                                                    <div class="mot_nua d_flex space_b width_50">
                                                        <div class="form_group form_group_block  width_50">
                                                            <label for="">Người tạo</label>
                                                            <input type="text" name="ten"
                                                                placeholder="Nguyễn Trần Trung Quân">
                                                        </div>
                                                        <div class="form_group form_group_block width_50">
                                                            <label for="">Ngày tạo</label>
                                                            <input type="text" name="ten" placeholder="10/10/2020">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container">
                                                    <div class="form_group width_50">
                                                        <label for="">Đánh giá lặp lại<span
                                                                class="color_red">*</span></label>
                                                        <div class="select_no_muti">
                                                            <select class="js_select_2" name="loai_de" id="loai_de">
                                                                <option value="1">Đề đánh giá</option>
                                                                <option value="2">Đề kiểm tra</option>
                                                                <option value="3">Đề đánh giá và đề kiểm tra</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form_group width_50">
                                                        <label for="">Người tạo</label>
                                                        <div class="select_no_muti">
                                                            <select class="js_select_2" name="loai_tc">
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
                                                        <input type="date" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group">
                                                        <label for="">Ngày kết thúc kế hoạch <span
                                                                class="color_red">*</span></label>
                                                        <input type="date" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group">
                                                        <label for="">Giờ bắt đầu đánh giá<span
                                                                class="color_red">*</span></label>
                                                        <input type="date" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group">
                                                        <label for="">Giờ kết thúc đánh giá<span
                                                                class="color_red">*</span></label>
                                                        <input type="date" name="ten" placeholder="10/10/2020">
                                                    </div>

                                                </div>
                                                <div class="form_group">
                                                    <label for="">Ghi chú</label>
                                                    <textarea id="editor1" name="editor1" cols="80"
                                                        rows="10"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btn_form d_flex content_c mt_25">
                                        <div class="btn btn_168 btn_trang mr_68">
                                            Hủy
                                        </div>
                                        <a href="/quan_ly_ke_hoach_danh_gia_them_moi_de_danh_gia.html"
                                            class="btn btn_168 btn_xanh btn_dekiemtra">
                                            <div class="d_flex align_c ">
                                                <p class="mr_10">Tiếp tục</p>
                                                <div class="img height_15">
                                                    <img src="../img/next_trang.png" alt="Tiếp tục">
                                                </div>
                                            </div>
                                        </a>
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
        $('.btn_dekiemtra').attr('href',
            '/quan_ly_ke_hoach_danh_gia_them_moi_de_danh_gia.html');
        $('.container_img_1').removeClass('display_none');
        $('.container_img_2').addClass('display_none');
        $('.container_img_3').addClass('display_none');
    }
    if (de_kiemtra == 2) {
        $('.btn_dekiemtra').attr('href', '/quan_ly_ke_hoach_danh_gia_them_moi_de_kiem_tra.html')
        $('.container_img_1').addClass('display_none');
        $('.container_img_2').removeClass('display_none');
        $('.container_img_3').addClass('display_none');

    }
    if (de_kiemtra == 3) {
        $('.btn_dekiemtra').attr('href', '/quan_ly_ke_hoach_danh_gia_them_moi_de_danh_gia_kiem_tra.html')
        $('.container_img_1').addClass('display_none');
        $('.container_img_2').addClass('display_none');
        $('.container_img_3').removeClass('display_none');
    }
})
</script>

</html>