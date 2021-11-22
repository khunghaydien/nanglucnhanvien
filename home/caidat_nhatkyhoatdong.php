<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhật ký hoạt động</title>
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
                            <p>Cài đặt / Nhật ký hoạt động</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="nhatkyhoatdong">
                            <p class="chuden size-14 tieude1024 bot-15">Cài đặt / Nhật ký hoạt động</p>
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="khoidanhmuc ">
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_caidatchung.html" class="tendanhmuccon  size-14">Cài đặt
                                                chung</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_nhatkyhoatdong.html"
                                                class="tendanhmuccon chuxanhdam size-14">Nhật ký hoạt động</a>
                                            <div class="border border-active"></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_thongtinbaomat.html" class="tendanhmuccon size-14">Thông
                                                tin bảo mật</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_thangdiem.html" class="tendanhmuccon size-14">Thang
                                                điểm</a>
                                            <div class="border "></div>
                                        </div>
                                    </div>

                                    <div class="khoibang po_r">
                                        <div class="thanh_dk tieude375">
                                            <div class="turn turn_left" id="turn_left">
                                                <img src="../img/left.png" alt="sang trái">
                                            </div>
                                            <div class=" turn turn_right" id="turn_right">
                                                <img src="../img/right.png" alt="sang phải">
                                            </div>
                                        </div>
                                        <div class="bangchung" id="bang_chung">
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
                                                    <td class="chuxanh"><a class="ko-gachchan chuxanh" href="">
                                                            Máy in sony - SBB000001</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>123456</td>
                                                    <td class="text-left">Nguyễn Trần Trung Quân</td>
                                                    <td>10:10 - 10/10/2021</td>
                                                    <td class="text-left">Duyệt biên bản tài sản cần bảo dưỡng</td>
                                                    <td class="chuxanh"><a class="ko-gachchan chuxanh" href="">
                                                            Bảo dưỡng tài sản - SBB000001</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex center-height space khoi_footerbang">
                                <div class="flex top-10 center-height khoi_footerbang_hienthi">
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

                                <div class="flex khoi_footerbang_phantrang">
                                    <div class="m_phantrang flex">
                                        <div class="phantrangcon right-15 ">
                                            << /div>
                                                <div class="phantrangcon right-10 pt_active">1</div>
                                                <div class="phantrangcon right-10 ">2</div>
                                                <div class="phantrangcon right-10 ">3</div>
                                                <div class="phantrangcon right-10 ">4</div>
                                                <div class="phantrangcon">5</div>
                                                <div class="phantrangcon left-15 ">></div>
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