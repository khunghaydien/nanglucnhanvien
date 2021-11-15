<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ke hoach danh gia</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/saitaman.css">
    <link rel="stylesheet" type="text/css" href="../css/tatsumaki.css">
</head>
<body >
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
                        <div class="kehoachdanhgia box-qlinhanvien">
                            <div class="search-qlnv">
                                <div class="khoi_left">
                                    <div class="leftsearch">
                                        <input type="text" name="" placeholder="Tìm kiếm nhân viên">
                                        <img src="../img/manhimg/kinhlup.png" class="kinhlup right-position-15" alt="">
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
                                                <img src="../img/manhimg/xuatexcel.png" class="wh14" alt="">
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
                                                <p class="phantucon">Tên kế hoạch đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Trạng thái</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người tạo</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người được đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Thời gian</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tiến độ</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ghi chú</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Chức năng</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chucam">Chờ duyệt</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>    
                                            </td>
                                            <td>
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    
                                                    <div class="bonus flex center-center left_am">
                                                        10
                                                    </div>
                                                    
                                                </div>     
                                            </td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress">
                                                        </div>
                                                        <div class="progress--bar" style="width: 50%">50%
                                                        </div>  
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left">Ghi chú 1</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5" alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14" href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5 pdbot5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14" href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuden">Từ chối</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>    
                                            </td>
                                            <td>
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <div class="bonus flex center-center left_am">
                                                        10
                                                    </div>
                                                </div>     
                                            </td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress">
                                                            <p class="chuden">0%</p>
                                                        </div>
                                                        <div class="progress--bar hidden" style="width: 50%">50%
                                                        </div>  
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left">Ghi chú 1</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5" alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14" href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5 pdbot5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14" href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><input class="wh16" type="checkbox"></td>
                                            <td class="chuxanh text-left font-medium">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuxanh">Đã duyệt</td>
                                            <td class="">
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="right-10" alt="">
                                                    <a class="chuden  size-14" href="/phanquyen_chitiet.html">Nguyễn Trần Trung Quân
                                                    </a>
                                                </div>    
                                            </td>
                                            <td>
                                                <div class="flex center-height">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <div class="bonus flex center-center left_am">
                                                        10
                                                    </div>
                                                    
                                                </div>     
                                            </td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress">
                                                        </div>
                                                        <div class="progress--bar" style="width: 100%">100%
                                                        </div>  
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-left">Ghi chú 1</td>
                                            <td>
                                                <div class="flex center-height space">
                                                    <img src="../img/manhimg/khoiphuc.png" class="right-5" alt="khooi phuc">
                                                    <a class="chuxanh font-medium size-14" href="/phanquyen_chitiet.html">Khôi phục
                                                    </a>
                                                    <p class="chuxanh right-5 left-5">|</p>
                                                    <img src="../img/manhimg/xoa.png" class="right-5 pdbot5" alt="khooi phuc">
                                                    <a class="chudo font-medium size-14" href="/phanquyen_chitiet.html">Xóa
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="nentrang keotrai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/phai.png"  alt="">
                                        </div>
                                    </div>
                                    <div class="nentrang keophai flex center-center">
                                        <div class="flex">
                                            <img src="../img/manhimg/trai.png"  alt="">
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