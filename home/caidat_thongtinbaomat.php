<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang cài đặt chung</title>
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
                        <div class="thongtinbaomat">
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
                                            <a href="" class="tendanhmuccon chuxanhdam size-14">Thông tin bảo mật</a>
                                            <div class="border border-active"></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon size-14">Thang điểm</a>
                                            <div class="border "></div>
                                        </div>
                                    </div>

                                    <div class="khoibang top-20">
                                        <div class="bangchung">
                                            <table class="bangchinh chuden">
                                                <tr>
                                                    <th>
                                                        <p class="phantucon">STT</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Thiết bị</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Chi tiết</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Chức năng</p>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td>1</td>
                                                    <td class="text-left">IPHONE 6PLUS</td>
                                                    <td class="text-left">Version: ANDROID 13.0.1</td>
                                                    <td class="chudo">Bỏ liên kết</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td class="text-left">IPHONE 6PLUS</td>
                                                    <td class="text-left">Version: ANDROID 13.0.1</td>
                                                    <td class="chudo">Bỏ liên kết</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex top-10 center-height ">
                                <p class="chuden size-14 right-10">Hiển thị:</p>
                                <div class="nentrang m_hienthi">
                                    <div class="flex center-height hienthi">
                                        <p class="chuden size-14 right-15">40</p>
                                        <div class="center-height flex">
                                            <img src="/../img/manhimg/down.png" alt="muitenxuong">
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