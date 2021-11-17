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
                            <p>Phân quyền</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phanquyen box-qlinhanvien">
                            <div class="search-qlnv">
                                <div class="khoi_left">
                                    <div class="leftsearch">
                                        <input type="text" name="" placeholder="Tìm kiếm nhân viên">
                                        <img src="../img/manhimg/kinhlup.png" class="kinhlup right-position-15"
                                            alt="">
                                    </div>
                                </div>
                                <div class="rightsearch flex center-height">
                                    <div class="flex rightsearch_con2">
                                        <button class="button nenxanh-chutrang un-m-r center-height br-10 size-16 ">
                                            <a class=" chutrang font-medium " href="phanquyen_chitiet.html">
                                                Thiết lập quyền
                                            </a>
                                        </button>
                                        <div class="flex rightsearch_con2_2">
                                            <button class="btn-nenxanhluc-chutrang button center-height br-10 size-16 ">
                                                <img src="../../img/manhimg/xuatexcel.png" class="wh14" alt="">
                                                <p class="left-10 font-medium">Xuất excel</p>
                                            </button>

                                            <div class="huongdan flex center-height ">
                                                <img src="../../img/manhimg/chamhoi.png" class="wh36" alt="">
                                                <p class="left-10 font-medium size-15">Hướng dẫn</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="khoibang">
                                <div class="bangchung">
                                    <table class="bangchinh chuden">
                                        <tr>
                                            <th>
                                                <p class="phantucon">Chọn</p>
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
                                                <p class="phantucon">Chức danh</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Chức năng</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td>00000001</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-left">Phòng nhân sự</td>
                                            <td>Trưởng phòng</td>
                                            <td>
                                                <div class="flex center-center">
                                                    <img src="../../img/manhimg/key.png" class="right-5" alt="">
                                                    <a class="chuxanh size-14" href="/phanquyen_chitiet.html">Thiết lập
                                                        quyền
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td>00000001</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="text-left">Phòng nhân sự</td>
                                            <td>Phụ trách phòng</td>
                                            <td>
                                                <div class="flex center-center">
                                                    <img src="../../img/manhimg/key.png" class="right-5" alt="">
                                                    <a class="chuxanh size-14" href="/phanquyen_chitiet.html">Thiết lập
                                                        quyền
                                                    </a>
                                                </div>
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
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
</html>