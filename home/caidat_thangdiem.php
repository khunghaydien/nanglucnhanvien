<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thang điểm</title>
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
                            <p>Cài đặt / Thang điểm</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="m_thangdiem">
                            <div class="flex">
                                <div class="khoi2">
                                    <div class="khoidanhmuc ">
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_caidatchung.html" class="tendanhmuccon  size-14">Cài đặt chung</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_nhatkyhoatdong.html" class="tendanhmuccon  size-14">Nhật ký hoạt động</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_thongtinbaomat.html" class="tendanhmuccon  size-14">Thông tin bảo mật</a>
                                            <div class="border "></div>
                                        </div>
                                        <div class="khoidanhmuccon">
                                            <a href="/caidat_thangdiem.html" class="tendanhmuccon size-14 chuxanhdam">Thang điểm</a>
                                            <div class="border border-active"></div>
                                        </div>
                                    </div>
                                    <div class="thangdiem shadow10 bot-20">
                                        <div class="nenxanh-chutrang ">
                                            <div class="padding15 flex space">
                                                <p class="size-16 font-bold">Thang điểm</p>
                                                <div class="flex c-pointer" onclick="hienpopupid('show_thietlapid')">
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
                                                <div class="flex c-pointer "onclick="hienpopupid('show_phanloaidanhgiaid')">
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
    <div id="show_thietlapid" class="popup hidden">
        <div class="show_thietlap pop">
            <div class="nenxanh-chutrang br-t-10 flex center-center padding15">
            <div class="">
                <h4 class="size-18 font-bold">Thiết lập thang điểm cho hệ thống</h4>
            </div>
            <div class="flex center-height c-pointer x_close">
                <img src="../img/manhimg/x.png" alt="Huong dan">
            </div>
            </div>
            <div class="nentrang br-b-10">
                <form action="">
                    <div class="padding-20">
                    <div class="bot-15">
                        <p class="chuden font-medium size-15 bot-5">Thang điểm<span class="chudo">*</span></p>
                        <div class="select_no_muti">
                            <select class="js_select_2" name="" id="">
                                <option value="">10</option>
                                <option value="">100</option>
                                <option value="">Khác</option>
                            </select>
                        </div> 
                    </div>
                    <div class="bot-15">
                        <p class="chuden font-medium size-15 bot-5">Thiết lập thang điểm</p>
                        <div class="border_input text">
                            <input type="text" placeholder="Nhập thang điểm" class="size-14 chuden">
                        </div> 
                    </div>
                    <div class="khoibutton_form top-25 bot-20">
                        <div onclick="hienpopupid('popup_thatbai')" 
                            class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer btnhuy_thangdiem">
                            Hủy
                        </div>
                        <div  onclick="hienpopupid('popup_thanhcong')" class="btn  btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 close c-pointer btnluu_thangdiem">
                            Lưu
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div id="show_phanloaidanhgiaid" class="popup hidden">
        <div class="popto">
            <div class="nenxanh-chutrang br-t-10 flex center-center padding15">
            <div class="">
                <h4 class="size-18 font-bold">Phân loại đánh giá</h4>
            </div>
            <div class="flex center-height c-pointer x_close">
                <img src="../img/manhimg/x.png" alt="Huong dan">
            </div>
            </div>
            <div class="nentrang br-b-10">
                <form action="">
                    <div class="padding-20">
                        <div class="mkhoiphanloai">
                            <div class="khoiphanloai"> 
                                <div class="khoiphanloaicon ">
                                    <div class="khoiphanloaiconcon flex  space bot-15 ">
                                        <div class="div145">
                                            <p class="chuden font-medium size-15 bot-5">Từ <span class="chudo">*</span></p>
                                            <div class="border_input text">
                                                <input type="number" placeholder="Nhập số điểm" class="size-14 chuden">
                                            </div> 
                                        </div>
                                        <div class="div145">
                                            <p class="chuden font-medium size-15 bot-5">Đến <span class="chudo">*</span></p>
                                            <div class="border_input text">
                                                <input type="number" placeholder="Nhập số điểm" class="size-14 chuden">
                                            </div> 
                                        </div>
                                        <div class="div145">
                                            <p class="chuden font-medium size-15 bot-5">Loại <span class="chudo">*</span></p>
                                            <div class="select_no_muti">
                                                <select name="" id="" class="js_select_2">
                                                    <option value="">Chọn loại</option>
                                                    <option value="">Yếu</option>
                                                    <option value="">Trung bình</option>
                                                    <option value="">Khá</option>
                                                    <option value="">Giỏi</option>
                                                    <option value="">Xuát sắc</option>
                                                </select>
                                            </div> 
                                        </div>
                                        <div class="div145 xoaphanloai c-pointer" onkeyup ="xoa_phanloai()">
                                                Xóa
                                        </div>
                                    </div>   
                                </div>
                            </div>      
                            <div class="themmoiphanloai nenxanh-chutrang flex  center-center c-pointer">
                                <div class="flex">
                                    <div class="right-10">
                                       <img src="../img/manhimg/themtrang.png" alt="Theem loai"> 
                                    </div>
                                    <p>Thêm loại</p>
                                </div>
                            </div>
                        </div>     
                        <div class="khoibutton_form top-25 bot-5">
                            <div onclick="hienpopupid('popup_thatbai')"
                                class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer btnhuy_phanloai">
                                Hủy
                            </div>
                            <div onclick="hienpopupid('popup_thanhcong')" class="btn close btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 c-pointer btnluu_phanloai">
                                Lưu
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <? include('../includes/manh_modal.php') ?>
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
<script type="text/javascript">
    $(".btnhuy_thangdiem").click(function(){
        $(".change_text_tb").text('Thiết lập thang điểm thất bại!!');
    });
    $(".btnluu_thangdiem").click(function(){
        $(".change_text_tc").text('Thiết lập thang điểm thành công!');
    });
    $(".btnhuy_phanloai").click(function(){
        $(".change_text_tb").text('Thiết lập phân loại thất bại!');
    });
    $(".btnluu_phanloai").click(function(){
        $(".change_text_tc").text('Thiết lập phân loại thành công!');
    });
</script>