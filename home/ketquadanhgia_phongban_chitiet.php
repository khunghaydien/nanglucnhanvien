<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý kết quả đánh giá Chi tiết phòng ban</title>
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
                        <a href="/ketquadanhgia-phongban.html">
                            <div class="flex center-height right-10 c-pointer">
                                <img src="../img/manhimg/back.png" alt="Quay lai">               
                            </div>
                        </a>
                            <p>Quản lý kết quả đánh giá / Chi tiết phòng ban</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="chitiet_kq_1n phongban_chitiet">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="rightsearch flex center-height bot-20">
                                        <div class="flex rightsearch_con2">
                                            <div class="flex rightsearch_con2_2">
                                                <button class="btn-nenxanhluc-chutrang button center-height br-10 size-16 ">
                                                    <img src="../../img/manhimg/xuatexcel.png" class="wh14" alt="">
                                                    <p class="left-10 font-medium">Xuất excel</p>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thangdiem shadow10 bot-20">
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
                                                    <p class="cacmuc">Phòng ban:</p>
                                                    <p class="cacketqua">Phòng kinh doanh</p>
                                                </div>
                                            </div>
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
                                                    <p class="cacmuc">Kế hoạch đánh giá:</p>
                                                    <p class="cacketqua">Kế hoạch đánh giá tháng 1</p>
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
                                                    <p class="cacmuc">Người đánh giá:</p>
                                                    <p class="cacketqua">
                                                        <div class="flex center-height">
                                                            <img src="../../img/manhimg/avata.png" class="" alt="">
                                                            <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                            <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                            <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                            
                                                        <div class="bonus flex center-center chutrang left_am">
                                                        10
                                                    </div>
                                                    
                                                </div></p>
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
                                                    <p class="cacmuc">Người duyệt:</p>
                                                    <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14
                                                    " href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Ngày duyệt:</p>
                                                    <p class="cacketqua">10:10 - 10/10/2020</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="chuxanh size-16 font-bold top-20 bot-20">Kết quả đề đánh giá</h4>
                                    <? include('../includes/bang_1nv_1N.php'); ?>

                                    <h4 class="chuxanh size-16 font-bold top-20 bot-20">Kết quả đề đánh giá</h4>
                                     <? include('../includes/bang_phongban_danhgia_1N.php'); ?>

                                    <h4 class="chuxanh size-16 font-bold top-20 bot-20">Kết quả đề đánh giá</h4>
                                     <? include('../includes/bang_phongban_danhgia_NN.php'); ?>
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