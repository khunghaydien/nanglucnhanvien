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
                                <p>Quản lý kế hoạch đánh giá <span> / </span><span> Thêm mới </span></p>
                            </div>
                            <? include('../includes/menu_header.php') ?>
                        </div>
                        <div class="main_body">
                            <form action="">
                                <div class="header_them_kehoach">

                                </div>
                                <div class="body_them_kehoach">
                                    <div class="form body_ql_tieuchi">
                                        <div class="header width_100">
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
                                                            <select class="js_select_2" name="loai_tc">
                                                                <option value="">Đề đánh giá</option>
                                                                <option value="">Đề kiểm tra</option>
                                                                <option value="">Đề đánh giá và đề kiểm tra</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form_group form_group_block width_50">
                                                        <label for="">Người tạo</label>
                                                        <div class="select_no_muti">
                                                            <select class="js_select_2" name="loai_tc">
                                                                <option value="">Không lặp lại</option>
                                                                <option value="">Lặp lại</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form_container form_container_4">
                                                    <div class="form_group ">
                                                        <label for="">Ngày bắt đầu kế hoạch <span
                                                                class="color_red">*</span></label>
                                                        <input type="date" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group ">
                                                        <label for="">Ngày kết thúc kế hoạch <span
                                                                class="color_red">*</span></label>
                                                        <input type="text" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group ">
                                                        <label for="">Giờ bắt đầu đánh giá<span
                                                                class="color_red">*</span></label>
                                                        <input type="text" name="ten" placeholder="10/10/2020">
                                                    </div>
                                                    <div class="form_group ">
                                                        <label for="">Giờ kết thúc đánh giá<span
                                                                class="color_red">*</span></label>
                                                        <input type="text" name="ten" placeholder="10/10/2020">
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
                                    <div class="btn_form d_flex content_c">
                                        <div class="btn btn_168 btn_trang mr_68">
                                            Hủy
                                        </div>
                                        <div class="btn btn_168 btn_xanh ">
                                            <div class="d_flex align_c ">
                                                <p class="mr_10">Tiếp tục</p>
                                                <div class="img">
                                                    <img src="../img/icon_next.png" alt="Tiếp tục">
                                                </div>
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