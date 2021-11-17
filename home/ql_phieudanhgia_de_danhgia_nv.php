<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phiếu đánh giá Chi tiết</title>
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
                        <div class="title_header flex center-height">
                            <a href="/quanly-phieudanhgia.html"><div class="flex center-height right-10 c-pointer">
                                <img src="../img/manhimg/back.png" alt="Quay lai">               
                            </div></a>
                            <p>Quản lý kết quả đề đánh giá / Nhân viên</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phieudanhgia_chitiet">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="search-qlnv">
                                        <div class="rightsearch flex center-height">
                                            <div class="flex rightsearch_con2">
                                                <button class="button nenxanh-chutrang un-m-r center-height br-10 size-16 ">
                                                    <img class="right-10" src="../img/manhimg/duyet.png" alt="duyệt">
                                                    <p class=" chutrang font-medium c-pointer" href="">
                                                        Duyệt
                                                    </p>
                                                </button>
                                                <button class="button nenxanh-chutrang un-m-r center-height br-10 size-16 ">
                                                    <img class="right-10" src="../img/manhimg/dgia.png" alt="đánh giá">
                                                    <a class=" chutrang font-medium " href="/quanly-phieudanhgia-danhgia-nv.html">
                                                        Đánh giá
                                                    </a>
                                                </button>
                                                <button class="button btn-nentrang-chuxanh un-m-r center-height br-10 size-16 ">
                                                    <p class=" chuxanh font-medium" >
                                                        Xóa phiếu
                                                    </p>
                                                </button>
                                                
                                                <div class="flex rightsearch_con2_2">
                                                    <button class="btn-nenxanhluc-chutrang button center-height br-10 size-16 ">
                                                        <img src="../img/manhimg/xuatexcel.png" class="wh14" alt="xuatexcel">
                                                        <p class="left-10 font-medium">Xuất excel</p>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thangdiem shadow10">
                                        <div class="nenxanh-chutrang js_nx_ct">
                                            <div class="padding15 flex space">
                                                <p class="size-16 font-bold">Thông tin phiếu đánh giá</p>
                                                <div class="flex c-pointer center-heght js_anbot ">
                                                    <p class="size-14 right-10 text_anbot">Ẩn bớt</p>
                                                    <div class="flex center-height ">
                                                        <img class="img_anbot" src="../img/manhimg/up.png" alt="An bot">
                                                    </div>
                                                </div>
                                                <div class="flex c-pointer center-heght hidden js_chitiet">
                                                    <p class="size-14 right-10 text_anbot">Chi tiết</p>
                                                    <div class="flex center-height ">
                                                        <img class="img_anbot" src="../img/manhimg/down2.png" alt="An bot">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nentrang show_js_anbot ">
                                            <div class="padding15 khoicon">
                                                <div class=" flex">
                                                    <p class="cacmuc">Mã phiếu đánh giá:</p>
                                                    <p class="cacketqua">PDG0000</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Ngày tạo:</p>
                                                    <p class="cacketqua">10/10/2020</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Đối tượng đánh giá:</p>
                                                    <p class="cacketqua">Nhân viên</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Số đối tượng:</p>
                                                    <p class="cacketqua">3</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Kế hoạch đánh giá:</p>
                                                    <p class="cacketqua">Kế hoạch đánh giá tháng 1</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Người đánh giá:</p>
                                                    <p class="cacketqua">
                                                        <div class="flex center-height">
                                                            <img src="../img/manhimg/avata.png" class="" alt="">
                                                            <img src="../img/manhimg/avata.png" class="left_am" alt="">
                                                            <img src="../img/manhimg/avata.png" class="left_am" alt="">
                                                            <img src="../img/manhimg/avata.png" class="left_am" alt="">
                                                            
                                                        <div class="bonus flex center-center chutrang left_am">
                                                        10
                                                    </div>
                                                    
                                                </div></p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Thời gian bắt đầu:</p>
                                                    <p class="cacketqua">10:10 - 10/10/2020</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Thời gian kết thúc:</p>
                                                    <p class="cacketqua">10:10 - 10/10/2020</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Thang điểm:</p>
                                                    <p class="cacketqua">100</p>
                                                </div>
                                            </div>
                                            
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Trạng thái:</p>
                                                    <p class="cacketqua chuxanhluc">Đã duyệt</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Tiến độ:</p>

                                                    <div class="flex center-center">
                                                        <div style="width:100px; height:26px">
                                                            <div class="khoi_pro_bar">
                                                                <div class="progress">
                                                                </div>
                                                                <div class="progress--bar" style="width: 80%">80%
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Ghi chú:</p>
                                                    <p class="cacketqua">Ghi chú 1</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                                        <td rowspan="2" class="text-left">Nguyễn Trần Trung Quân </td>
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
                                                        <td rowspan="2" class="text-left">Nguyễn Trần Trung Quân </td>
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
                                                        <td rowspan="2" class="text-left">Nguyễn Trần Trung Quân </td>
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