<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhat ky hoat dong</title>
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
                        <div class="nhatkyhoatdong">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="khoidanhmuc ">
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon  size-14">Cài đặt chung</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon chuxanhdam size-14">Nhật ký hoạt động</a>
                                            <div class="border border-active"></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon size-14">Thông tin bảo mật</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="" class="tendanhmuccon size-14">Thang điểm</a>
                                            <div class="border "></div>
                                        </div>
                                    </div>

                                    <div class="khoibang">
                                        <div class="bangchung">
                                            <table class="bangchinh chuden">
                                                <tr>
                                                    <th>
                                                        <p class="phantucon">ID</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Tên người dùng</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Ngày giờ</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Hành động</p>
                                                    </th>
                                                    <th>
                                                        <p class="phantucon">Tham chiếu</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>123456</td>
                                                    <td class="text-left">Công ty cổ phần thanh toán hưng hà</td>
                                                    <td>10:10 - 10/10/2021</td>
                                                    <td class="text-left">Duyệt biên bản tài sản cần bảo dưỡng</td>
                                                    <td class="chuxanh"><a class="ko-gachchan chuxanh"
                                                            href="/phanquyen_chitiet.html">
                                                            Máy in sony - SBB000001</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456</td>
                                                    <td class="text-left">Nguyễn Trần Trung Quân</td>
                                                    <td>10:10 - 10/10/2021</td>
                                                    <td class="text-left">Duyệt biên bản tài sản cần bảo dưỡng</td>
                                                    <td class="chuxanh"><a class="ko-gachchan chuxanh"
                                                            href="/phanquyen_chitiet.html">
                                                            Bảo dưỡng tài sản - SBB000001</a>
                                                    </td>
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
                                            <img src="../img/manhimg/down.png" alt="muitenxuong">
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