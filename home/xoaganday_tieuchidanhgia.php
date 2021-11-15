<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> tieu chi danh gia</title>
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
                        <div class="tieuchidanhgia box-qlinhanvien">
                            <div class="khoidanhmuc ">
                                <div class="khoidanhmuccon">
                                    <a href="/tieuchi-danh-gia.html" class="tendanhmuccon chuxanhdam size-14">Tiêu chí
                                        đánh giá</a>
                                    <div class="border border-active"></div>
                                </div>
                                <div class="khoidanhmuccon">
                                    <a href="/de-danh-gia.html" class="tendanhmuccon size-14">Đề đánh giá</a>
                                    <div class="border "></div>
                                </div>
                            </div>
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
                                        <button class="button btn-nentrang-chuxanh un-m-r center-height br-10 size-16 ">
                                            <a class=" chuxanh font-medium" href="phanquyen_chitiet.html">
                                                Xóa vĩnh viễn
                                            </a>
                                        </button>
                                        <button class="button nenxanh-chutrang un-m-r center-height br-10 size-16 ">
                                            <a class=" chutrang font-medium " href="phanquyen_chitiet.html">
                                                Khôi phục
                                            </a>
                                        </button>
                                        <div class="flex rightsearch_con2_2">
                                            <button class="btn-nenxanhluc-chutrang button center-height br-10 size-16 ">
                                                <img src="../../img/manhimg/xuatexcel.png" class="wh14" alt="">
                                                <p class="left-10 font-medium">Xuất excel</p>
                                            </button>

                                            <div class="huongdan flex center-height ">
                                                <img src="../img/manhimg/chamhoi.png" class="wh36" alt="">
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
                                                <p class="phantucon">STT</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tên tiêu chí</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Loại tiêu chí</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Thang điểm</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người tạo</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ngày xóa</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Chức năng</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Tiêu chí con người dùng tự tạo
                                            </td>
                                            <td>Tiêu chí tổng hợp</td>
                                            <td class="text-right">10</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                        alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Tiêu chí con người dùng tự tạo
                                            </td>
                                            <td>Tiêu chí tổng hợp</td>
                                            <td class="text-right">10</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                        alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Tiêu chí con người dùng tự tạo
                                            </td>
                                            <td>Tiêu chí tổng hợp</td>
                                            <td class="text-right">10</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn
                                                        Trần Trung Quân
                                                    </a>
                                                </div>
                                            </td>
                                            <td>10:10 - 10/10/2020</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5"
                                                        alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14"
                                                        href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="nentrang keotrai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/phai.png" alt="">
                                        </div>
                                    </div>
                                    <div class="nentrang keophai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/trai.png" alt="">
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