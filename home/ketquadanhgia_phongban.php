<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý kế kết quả đánh giá phòng ban</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
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
                            <p>Quản lý kế kết quả đánh giá phòng ban</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="kqdanhgia_pb box-qlinhanvien">
                            <div class="flex space bot-20">
                                <div class="flex">
                                    <div class="nentrang m_danhmucdanhgia br-10">
                                        <div class="select_no_muti danhmucdanhgia">
                                            <select name="" id="" class="js_select_2">
                                                <option value="">Tất cả phòng ban</option>
                                                <option value="">Phòng nhân sự</option>
                                                <option value="">Phòng kinh doanh</option>
                                                <option value="">Phòng kỹ thuật</option>
                                                <option value="">Phòng biên tập</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="nentrang m_danhmucdanhgia br-10">
                                        <div class="select_no_muti danhmucdanhgia">
                                            <select name="" id="" class="js_select_2">
                                                <option value="">Tất cả kế hoạch đánh giá</option>
                                                <option value="">Kế hoạch đánh giá 1</option>
                                                <option value="">Bài đánh giá 1</option>
                                                <option value="">Kế hoạch đánh giá 1</option>
                                                <option value="">Kế hoạch đánh giá 1</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="nentrang m_danhmucdanhgia br-10">
                                        <div class="select_no_muti danhmucdanhgia">
                                            <select name="" id="" class="js_select_2">
                                                <option value="">Không sắp xếp số điểm</option>
                                                <option value="">Số điểm giảm dần</option>
                                                <option value="">Số điểm tăng dấn</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <a href="/huongdan.html">
                                    <div class="huongdan flex center-height ">
                                        <img src="../img/manhimg/chamhoi.png" class="wh36" alt="">
                                        <p class="left-10 font-medium size-15">Hướng dẫn</p>
                                    </div>
                                </a>
                            </div>

                            <div class="khoibang">
                                <div class="bangchung">
                                    <table class="bangchinh chuden">
                                        <tr>
                                            <th>
                                                <p class="phantucon">STT</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Phòng ban</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Kế hoạch đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Phiếu đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Điểm trung bình</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Xếp loại</p>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-left">Phòng nhân sự</td>
                                            <td class="text-left">Kế hoạch đánh giá nhân viên 1</td>
                                            <td><a class="chuxanh"
                                                    href="/ketquadanhgia-phongban-chitiet.html">PDG0000</a></td>
                                            <td class="text-right">80</td>
                                            <td class="chunau">Yếu</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-left">Phòng nhân sự</td>
                                            <td class="text-left">Kế hoạch đánh giá nhân viên 1</td>
                                            <td><a class="chuxanh" href="">PDG0000</a></td>
                                            <td class="text-right">80</td>
                                            <td class="chuxanh">Trung bình</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td class="text-left">Phòng nhân sự</td>
                                            <td class="text-left">Kế hoạch đánh giá nhân viên 1</td>
                                            <td><a class="chuxanh" href="">PDG0000</a></td>
                                            <td class="text-right">80</td>
                                            <td class="chuxanhluc">Khá</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>

                                            <td class="text-left">Phòng nhân sự</td>

                                            <td class="text-left">Kế hoạch đánh giá nhân viên 1</td>
                                            <td><a class="chuxanh" href="">PDG0000</a></td>
                                            <td class="text-right">80</td>
                                            <td class="chucam">Giỏi</td>
                                        </tr>
                                        <tr>
                                            <td>1</td>

                                            <td class="text-left">Phòng nhân sự</td>

                                            <td class="text-left">Kế hoạch đánh giá nhân viên 1</td>
                                            <td><a class="chuxanh" href="">PDG0000</a></td>
                                            <td class="text-right">80</td>
                                            <td class="chudo">Xuất sắc</td>
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
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/manh.js"></script>
<script>
$('.js_select_2').select2({
    width: '100%'
})
</script>

</html>