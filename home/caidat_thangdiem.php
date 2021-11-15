<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thang điểm</title>
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
                            <p>Trang chủ</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="m_thangdiem">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="khoidanhmuc ">
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon  size-14">Cài đặt chung</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon  size-14">Nhật ký hoạt động</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon size-14">Thông tin bảo mật</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon chuxanhdam size-14">Thang điểm</a>
                                            <div class="border border-active"></div>
                                        </div>
                                    </div>
                                    <div class="thangdiem shadow10 bot-20">
                                        <div class="nenxanh-chutrang ">
                                            <div class="padding15 flex space">
                                                <p class="size-16 font-bold">Thang điểm</p>
                                                <div class="flex c-pointer">
                                                    <div class="right-5">
                                                        <img src="../img/manhimg/thietlap.png" alt="Thiet lap">
                                                    </div>
                                                    <p class="size-14">Thiết lập</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nentrang">
                                            <div class="padding15 flex space">
                                                <p class="size-16 font-medium">Thang điểm:<span
                                                        class="left-10">100</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thangdiem shadow10">
                                        <div class="nenxanh-chutrang ">
                                            <div class="padding15 flex space">
                                                <p class="size-16 font-bold">Phân loại đánh giá</p>
                                                <div class="flex c-pointer">
                                                    <div class="right-5">
                                                        <img src="../img/manhimg/thietlap.png" alt="Thiet lap">
                                                    </div>
                                                    <p class="size-14">Thiết lập</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="nentrang">
                                            <div class="padding15 khoicon">
                                                <div class=" flex">
                                                    <p class="cacmuc">Yếu:</p>
                                                    <p class="cacketqua">0 -> 50</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Trung bình:</p>
                                                    <p class="cacketqua">51 -> 60</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Khá:</p>
                                                    <p class="cacketqua">61 -> 79</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Giỏi:</p>
                                                    <p class="cacketqua">80 -> 90</p>
                                                </div>
                                            </div>
                                            <div class="padding15 khoicon">
                                                <div class="flex">
                                                    <p class="cacmuc">Xuất sắc:</p>
                                                    <p class="cacketqua">90 -> 100</p>
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
    </div>

</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
</html>