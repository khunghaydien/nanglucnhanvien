<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phiếu đánh giá Đánh giá</title>
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
                            <p>Quản lý kết quả đánh giá / Chi tiết / Đánh giá</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phieudanhgia_chitiet danhgia_hoanthanh">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="flex khoitieude">
                                        <div class="right-15">
                                            <h4 class="chuxanh size-16 font-bold top-20 bot-20">Phiếu đánh giá</h4>
                                        </div>
                                    </div>
                                    <div class="bangto3">
                                        <div class="khoibang">
                                            <div class="bangchung ">
                                                <table class="bangchinh chuden ">
                                                    <tr>
                                                        <td rowspan="3">
                                                            <p class="phantucon size-16 font-medium">STT</p>
                                                        </td>
                                                        <td rowspan="3">
                                                            <p class="phantucon size-16 font-medium">Họ tên</p>
                                                        </td>
                                                        <td colspan="7" class="size-16 font-medium">
                                                            Tiêu chí
                                                        </td>
                                                        <td rowspan="3" class="font-medium size-16">
                                                            Tổng điểm
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" class="">
                                                            <p class="font-medium">Kiến thức</p>
                                                            <p class="">(Thang điểm: 10)</p>
                                                        </td>
                                                        <td rowspan="2">
                                                            <p class="font-medium">Tiêu chí 1</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                        <td rowspan="2">
                                                            <p class="font-medium">Tiêu chí 2</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p class="font-medium">Hiểu biết thấu đáo</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                        <td>
                                                            <p class="font-medium">Hiểu biết thấu đáo</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                        <td>
                                                            <p class="font-medium">Hiểu biết thấu đáo</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                        <td>
                                                            <p class="font-medium">Hiểu biết thấu đáo</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                        <td>
                                                            <p class="font-medium">Hiểu biết thấu đáo</p>
                                                            <p>(Thang điểm: 10)</p>
                                                        </td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td rowspan="2" class="">1</td>
                                                        <td rowspan="2" class="text-left">Phòng nhân sự</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td rowspan="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="text-left">
                                                            Nhận xét
                                                        </td>
                                                    </tr>
                                                   <tr>
                                                        <td rowspan="2" class="">1</td>
                                                        <td rowspan="2" class="text-left">Phòng kinh doanh</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td rowspan="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="text-left">
                                                            Nhận xét
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="2" class="">1</td>
                                                        <td rowspan="2" class="text-left">Phòng kỹ thuật</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td class="text-left">Nhập số điểm</td>
                                                        <td rowspan="2"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="7" class="text-left">
                                                            Nhận xét
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="khoibutton_form top-25">
                                        <div class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer ">
                                            Xóa
                                        </div>
                                        <div class="btn close btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 c-pointer">
                                            Lưu
                                        </div>
                                        
                                        <div class="btn close btn-nenxanhluc-chutrang br-5 vienxanhluc font-medium size-15 c-pointer">
                                            Hoàn thành
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
<script type="text/javascript" src="../js/manh.js"></script>
</html>