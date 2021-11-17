<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân quyền</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/saitaman.css">
    <link rel="stylesheet" type="text/css" href="../css/tatsumaki.css">
</head>

<body>
    <div class="wapper">
        <div class="d_flex">
            <? include('../includes/cd_sidebar.php'); ?>
            <div class="main">
                <div class="header back_w border_r10 w_100">
                    <div class="box_header d_flex space_b align_c position_r">
                        <div class="title_header">
                            <p>Phân quyền / Nguyễn Trần Trung Quân</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phanquyenchitiet box-qlinhanvien">
                            <div class="khoibang">
                                <div class="bangchung">
                                    <table class="bangchinh chuden">
                                        <tr>
                                            <th>
                                                <p class="phantucon">Tên quyền</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Xem</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Thêm</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Sửa</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Xóa</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Duyệt/Xác nhận</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td class="text-left chuden font-medium">Quản lý tiêu chí đánh giá</td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left chuden font-medium">Quản lý phiếu đánh giá</td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left chuden font-medium">Quản lý kết quả đánh giá</td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left chuden font-medium">Lộ trình thăng tiến</td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                        </tr>
                                        <tr>
                                            <td class="text-left chuden font-medium">Phân quyền</td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td><input class="wh16" type="checkbox"></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                            <div class="khoibutton_form top-25">
                                <div onclick="hienpopupid('popup_thatbai')" 
                                    class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer btnhuy_phanquyen">
                                    Hủy
                                </div>
                                <div  onclick="hienpopupid('popup_thanhcong')" class="btn close btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 c-pointer btnluu_phanquyen">
                                    Lưu
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<? include('../includes/manh_modal.php'); ?>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/manh.js"></script>
</html>
<script type="text/javascript">
    $(".btnhuy_phanquyen").click(function(){
        $(".change_text_tb").text('Cập nhật phân quyền thất bại!');
    });
    $(".btnluu_phanquyen").click(function(){
        $(".change_text_tc").text('Cập nhật phân quyền thành công!');
    })
</script>