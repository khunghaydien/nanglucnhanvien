<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phiếu đánh giá</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/saitaman.css">
    <link rel="stylesheet" type="text/css" href="../css/tatsumaki.css">
    <link rel="stylesheet" type="text/css" href="../css/select2.min.css">
</head>

<body>
    <div class="wapper">
        <div class="d_flex">
            <? include('../includes/cd_sidebar.php'); ?>
            <div class="main">
                <div class="header back_w border_r10 w_100">
                    <div class="box_header d_flex space_b align_c position_r">
                        <div class="title_header">
                            <p>Quản lý phiếu đánh giá</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="phieudanhgia box-qlinhanvien">
                            <p class="chuden size-14 tieude1024 bot-15">Quản lý phiếu đánh giá</p>
                            <div id="show_thietlaptime" class="popup hidden">
                                <div class=" pop">
                                    <div class="nenxanh-chutrang br-t-10 flex center-center padding15">
                                        <div class="">
                                            <h4 class="size-18 font-bold">Chọn khoảng thời gian</h4>
                                        </div>
                                        <div class="flex center-height c-pointer x_close">
                                            <img src="../img/manhimg/x.png" alt="Huong dan">
                                        </div>
                                    </div>
                                    <div class="nentrang br-b-10">

                                        <div class="padding-20">
                                            <div class="bot-15">
                                                <p class="chuden font-medium size-15 bot-5">Từ ngày:</p>
                                                <div class="border_input date">
                                                    <input id="datebd-input" type="date">
                                                </div>
                                                <p class="errol_time chudo top-5 hidden size-12 font-medium chunghieng">
                                                    Thời gian bắt đầu phải nhỏ hơn kết thúc</p>
                                            </div>
                                            <div class="bot-15">
                                                <p class="chuden font-medium size-15 bot-5">Đến ngày:</p>
                                                <div class="border_input date">
                                                    <input id="datekt-input" type="date">
                                                </div>
                                            </div>
                                            <div class="khoibutton_form top-25 bot-20">
                                                <button type=""
                                                    class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer">
                                                    Hủy
                                                </button>
                                                <button id="submit"
                                                    class="btn  btn-nenxanh-chutrang  br-5 vienxanh font-medium size-15  c-pointer">
                                                    Chọn
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="flex space">
                                <div class="flex">
                                    <div class="nentrang m_danhmucdanhgia br-10 c-pointer "
                                        onclick="hienpopupid('show_thietlaptime')">
                                        <div class="danhmucdanhgia flex center-height">
                                            <p class="chuden size-14 right-10">Thời gian đánh giá: </p>
                                            <p class="chuden size-14 time_danhgia">12/05 - 12/07/2021</p>
                                        </div>
                                    </div>
                                    <div class="nentrang m_danhmucdanhgia br-10 c-pointer ">
                                        <div class="danhmucdanhgia select_no_muti ">
                                            <select name="" id="thanh_pho" class="js_select_2 js_choice_status">
                                                <option value="0">Tất cả trạng thái</option>
                                                <option value="1">Đang đánh giá</option>
                                                <option value="2">Hoàn thành</option>
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

                            <div class="search-qlnv">
                                <div class="khoi_left">
                                    <div class="leftsearch">
                                        <input type="text" name="" placeholder="Tìm kiếm theo tên kế hoạch">
                                        <img src="../img/manhimg/kinhlup.png" class="kinhlup right-position-15"
                                            alt="timkiem">
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
                                                <p class="phantucon">Mã phiếu</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tên kế hoạch đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Trạng thái</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Tiến độ</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Đối tượng</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Số đối tượng</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Thời gian</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Người đánh giá</p>
                                            </th>
                                            <th>
                                                <p class="phantucon">Ghi chú</p>
                                            </th>
                                        </tr>
                                        <tr class="tt_hoanthanh">
                                            <td>1</td>
                                            <td class="chuxanh text-left"><a class="chuxanh"
                                                    href="/phieudanhgia-de-kiemtra-nv.html">PDG0000</a></td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuxanhluc">Hoàn thành</td>
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
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center js_thanhvien c-pointer">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Ghi chú 1</td>
                                        </tr>
                                        <tr class="tt_dangdanhgia">
                                            <td>1</td>
                                            <td class="chuxanh text-left"><a class="chuxanh"
                                                    href="/phieudanhgia-de-danhgia-nv.html">PDG0000</a></td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuxanh">Đang đánh giá</td>
                                            <td>
                                                <div style="width:100%; height:30px">
                                                    <div class="khoi_pro_bar">
                                                        <div class="progress chuden">0%
                                                        </div>
                                                        <div class="progress--bar hidden" style="width: 0%">50%
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Tích hợp tất cả các ứng dụng doanh nghiệp
                                                của bạn đang cần trên một nền tảng duy nhất.</td>
                                        </tr>
                                        <tr class="tt_hoanthanh">
                                            <td>1</td>
                                            <td class="chuxanh text-left"><a class="chuxanh"
                                                    href="/phieudanhgia-de-danhgia-pb.html">PDG0000</a></td>
                                            <td class=" text-left ">Kế hoạch đánh giá nhân viên 1</td>
                                            <td class="chuxanhluc">Hoàn thành</td>
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
                                            <td>Nhân viên</td>
                                            <td class="text-right">100</td>
                                            <td class="text-center">
                                                <div class="flex bot-5 center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chuxanh font-medium">Từ:</p>
                                                    </div>
                                                    <div class="right_time ">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                                <div class="flex center-center">
                                                    <div class="left_time text-left">
                                                        <p class="chudo font-medium">Đến:</p>
                                                    </div>
                                                    <div class="right_time">
                                                        <p class="chuden">10:10 - 10/10/2020</p>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="flex center-center js_thanhvien c-pointer">
                                                    <img src="../../img/manhimg/avata.png" class="" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">
                                                    <img src="../../img/manhimg/avata.png" class="left_am" alt="">

                                                    <div class="bonus chutrang flex center-center left_am">
                                                        10
                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-left lineheight16">Ghi chú 1</td>
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
    <? include('../includes/manh_modal.php'); ?>
</body>
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../js/trangchung.js"></script>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script type="text/javascript" src="../js/manh.js"></script>
<script type="text/javascript">
$('.js_select_2').select2({
    width: '100%'
});

$('#submit').click(function() {
    var datebd = new Date($('#datebd-input').val());
    daybd = datebd.getDate();
    monthbd = datebd.getMonth() + 1;
    yearbd = datebd.getFullYear();


    var datekt = new Date($('#datekt-input').val());
    daykt = datekt.getDate();
    monthkt = datekt.getMonth() + 1;
    yearkt = datekt.getFullYear();

    if (datebd > datekt) {
        $('.errol_time').removeClass("hidden");
    } else if (datebd <= datekt) {
        $('.time_danhgia').html(daybd + '/' + monthbd + ' - ' + daykt + '/' + monthkt + '/' + yearkt);
        $('.errol_time').addClass("hidden");
        $('#show_thietlaptime').addClass('hidden');
    }
});

$('.js_choice_status').change(function() {
    var a = $("#thanh_pho").find(":selected").val();
    if (a == 2) {
        $('.tt_dangdanhgia').hide();
        $('.tt_hoanthanh').show();
    }
    if (a == 1) {
        $('.tt_dangdanhgia').show();
        $('.tt_hoanthanh').hide();
    }
    if (a == 0) {
        $('.tt_hoanthanh').show();
        $('.tt_dangdanhgia').show();
    }

})
</script>

</html>