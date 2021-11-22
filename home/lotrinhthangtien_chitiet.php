<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Lộ trình thăng tiến / Chi tiết</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <div class="title_header flex center-height">
                            <a href="/lotrinhthangtien.html">
                                <div class="flex center-height right-10 c-pointer">
                                    <img src="../img/manhimg/back.png" alt="Quay lai">
                                </div>
                            </a>
                            <p>Lộ trình thăng tiến / Chi tiết</p>
                        </div>
                        <? include('../includes/menu_header.php') ?>
                    </div>
                    <div class="main_body">
                        <div class="lotrinhthangtien_chitiet">
                            <div class="tieude1024 size-14 flex center-height bot-15">
                                <a href="/lotrinhthangtien.html">
                                    <div class="flex center-height right-10 c-pointer">
                                        <img src="../img/manhimg/back.png" alt="Quay lai">
                                    </div>
                                </a>
                                <p>Lộ trình thăng tiến / Chi tiết</p>
                            </div>
                           <div class="m_lotrinh_chitiet">
                                <div class="flex nenxanh-chutrang space br-t-10 tieude_phongban">
                                    <div class=" flex center-height">
                                        <p class="size-16 font-bold">Phòng nhân sự</p>
                                    </div>
                                    <div class="flex center-height c-pointer js_themchucvu"
                                        onclick="hienpopupid('popup_show_suachucvu')">
                                        <img src="../img/manhimg/themchucvu.png" class="flex center-height"
                                            alt="them chuc vu">
                                        <p class="size-14">Thêm chức vụ</p>
                                    </div>
                                </div>
                                <div class="nentrang over_scroll_x">
                                   <div class="scrollx_lotrinhchitiet">
                                        <div class="nenxam flex m_chitiet_phongban ">
                                            <div class="chitiet_phongban flex space">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Nhân viên</p>
                                                    <p class="chuden size-14">Yêu cầu: 2</p>
                                                </div>
                                                <div class="c-pointer js_menu_curd">
                                                    <img src="../img/manhimg/3cham.png" class="" alt="them chuc vu">
                                                    <div class="show_menu_curd nentrang">
                                                        <div
                                                            class="nd_con_menu_curd flex center-height br-t-10 js_thanhvien c-pointer">
                                                            <img src="../img/manhimg/xemds.png"
                                                                class="flex center-height right-10" alt="xem danh sach">
                                                            <p class="chuden size-14">Xem danh sách thành viên</p>
                                                        </div>
                                                        <div class="nd_con_menu_curd flex center-height"
                                                            onclick="hienpopupid('popup_show_suachucvu')">
                                                            <img src="../img/manhimg/chinhsua.png"
                                                                class="flex center-height right-10" alt="chinh sua">
                                                            <p class="chuden size-14">Chỉnh sửa</p>
                                                        </div>
                                                        <div class="nd_con_menu_curd flex center-height"
                                                            onclick="hienpopupid('popup_show_themyccv')">
                                                            <img src="../img/manhimg/them.png"
                                                                class="flex center-height right-10" alt="chinh sua">
                                                            <p class="chuden size-14">Thêm yêu cầu công việc</p>
                                                        </div>
                                                        <div class="nd_con_menu_curd flex center-height br-b-10 js_xoachucvu"
                                                            onclick="hienpopupid('popup_before')">
                                                            <img src="../img/manhimg/xoamn.png"
                                                                class="flex center-height right-10" alt="chinh sua">
                                                            <p class="chuden size-14">Xóa chức vụ</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="chitiet_phongban flex space">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Phó trưởng phòng</p>
                                                    <p class="chuden size-14">Yêu cầu: 2</p>
                                                </div>
                                                <div>
                                                    <img src="../img/manhimg/3cham.png" class="" alt="them chuc vu">
                                                </div>
                                            </div>
                                            <div class="chitiet_phongban flex space">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Trưởng phòng</p>
                                                    <p class="chuden size-14">Yêu cầu: 2</p>
                                                </div>
                                                <div>
                                                    <img src="../img/manhimg/3cham.png" class="" alt="them chuc vu">
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" flex m_chitiet_phongban">
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 1</p>
                                                    <p class="chuden size-14 lineheight16">Mô tả công việc hoặc JD là một
                                                        tường thuật bằng văn bản mô tả các nhiệm vụ chung hoặc các nhiệm vụ
                                                        liên quan khác và trách nhiệm của một vị trí.</p>
                                                </div>
                                                <div class="flex just-end c-pointer js_menu_curd2">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                    <div class="show_menu_curd2 nentrang ">
                                                        <div class="nd_con_menu_curd br-t-10 flex center-height sua_yccv"
                                                            onclick="hienpopupid('popup_show_themyccv')">
                                                            <img src="../img/manhimg/chinhsua.png"
                                                                class="flex center-height right-10" alt="chinh sua">
                                                            <p class="chuden size-14">Chỉnh sửa yêu cầu công việc</p>
                                                        </div>
                                                        <div class="nd_con_menu_curd flex center-height br-b-10 js_xoa_yc"
                                                            onclick="hienpopupid('popup_before')">
                                                            <img src="../img/manhimg/xoamn.png"
                                                                class="flex center-height right-10" alt="chinh sua">
                                                            <p class="chuden size-14">Xóa yêu cầu công việc</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 1</p>
                                                    <p class="chuden size-14 lineheight16">Mô tả công việc hoặc JD là một
                                                        tường thuật bằng văn bản mô tả các nhiệm vụ chung hoặc các nhiệm vụ
                                                        liên quan khác và trách nhiệm của một vị trí.</p>
                                                </div>
                                                <div class="flex just-end">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 1</p>
                                                    <p class="chuden size-14 lineheight16">Mô tả công việc hoặc JD là một
                                                        tường thuật bằng văn bản mô tả các nhiệm vụ chung hoặc các nhiệm vụ
                                                        liên quan khác và trách nhiệm của một vị trí.</p>
                                                </div>
                                                <div class="flex just-end">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" flex m_chitiet_phongban">
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 2</p>

                                                </div>
                                                <div class="flex just-end">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 2</p>

                                                </div>
                                                <div class="flex just-end">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chitiet_phongban">
                                                <div>
                                                    <p class="chuden size-15 font-medium bot-5 ">Yêu cầu 2</p>

                                                </div>
                                                <div class="flex just-end">
                                                    <div>
                                                        <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" flex m_chitiet_phongban2">
                                            <div class="chitiet_phongban">

                                            </div>
                                            <div class="chitiet_phongban">

                                            </div>
                                            <div class="chitiet_phongban">

                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <? include('../includes/manh_modal.php'); ?>
                            <div id="popup_show_themyccv" class="popup hidden">
                                <div class=" pop">
                                    <div class="">
                                        <div class="nenxanh-chutrang br-t-10 flex center-center padding15">
                                            <div class="">
                                                <h4 class="size-18 font-bold h4_yccv">Thêm yêu cầu công việc</h4>
                                            </div>
                                            <div class="flex center-height c-pointer x_close">
                                                <img src="../img/manhimg/x.png" alt="Huong dan">
                                            </div>
                                        </div>
                                        <div class="nentrang">
                                            <div class="padding-20">
                                                <div class="bot-15">
                                                    <p class="chuden font-medium size-15 bot-5">Tên yêu cầu công
                                                        việc<span class="chudo">*</span></p>
                                                    <div class="border_input text">
                                                        <input type="text" placeholder="Nhập yêu cầu"
                                                            class="size-14 chuden">
                                                    </div>
                                                </div>
                                                <div class="bot-15">
                                                    <p class="chuden font-medium size-15 bot-5">Vị trí đặt chức vụ</p>
                                                    <div class="select_no_muti">
                                                        <select class="js_select_2" name="" id="">
                                                            <option value="">Chọn vị trí đặt yêu cầu công việc</option>
                                                            <option value="">Trên yêu cầu 1</option>
                                                            <option value="">Trên yêu cầu 2</option>
                                                            <option value="">Trên yêu cầu 3</option>
                                                            <option value="">Trên yêu cầu 4</option>
                                                            <option value="">Dưới cùng</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <p class="chuden font-medium size-15 bot-5">Mô tả yêu cầu công
                                                        việc<span class="chudo">*</span></p>
                                                    <div class="border_input textarea">
                                                        <textarea name="" id=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="khoibutton_form top-25">
                                                    <div class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer btnhuy_yeucau "
                                                        onclick="hienpopupid('popup_thatbai')">
                                                        Hủy
                                                    </div>
                                                    <div class="btn close btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 c-pointer btnluu_yeucau"
                                                        onclick="hienpopupid('popup_thanhcong')">
                                                        Lưu
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="popup_show_suachucvu" class="popup hidden">
                                <div class=" pop">
                                    <div class=" ">
                                        <div class="nenxanh-chutrang br-t-10 flex center-center padding15">
                                            <div class="">
                                                <h4 class="size-18 font-bold h4_chucvu">Chỉnh sửa chức vụ</h4>
                                            </div>
                                            <div class="flex center-height c-pointer x_close">
                                                <img src="../img/manhimg/x.png" alt="Huong dan">
                                            </div>
                                        </div>
                                        <div class="nentrang br-b-10">
                                            <div class="padding-20">
                                                <div class="bot-15">
                                                    <p class="chuden font-medium size-15 bot-5">Chức vụ</p>
                                                    <div class="border_input text">
                                                        <input type="text" placeholder="Nhân viên"
                                                            class="size-14 chuden">
                                                    </div>
                                                </div>
                                                <div class="bot-15">
                                                    <p class="chuden font-medium size-15 bot-5">Vị trí đặt chức vụ</p>
                                                    <div class="select_no_muti">
                                                        <select class="js_select_2" name="" id="">
                                                            <option value="2">Trước nhân viên</option>
                                                            <option value="">Trước phó trưởng phòng</option>
                                                            <option value="">Trước trưởng phòng</option>
                                                            <option value="">Trước giám đốc</option>
                                                            <option value="">Cuối cùng</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="khoibutton_form top-25">
                                                    <div onclick="hienpopupid('popup_thatbai')"
                                                        class="btn close btn-nentrang-chuxanh br-5 vienxanh font-medium size-15 c-pointer btnhuy">
                                                        Hủy
                                                    </div>
                                                    <div onclick="hienpopupid('popup_thanhcong')"
                                                        class="btn close btn-nenxanh-chutrang br-5 vienxanh font-medium size-15 c-pointer btnluu">
                                                        Lưu
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
<script type="text/javascript">
$(".btnhuy").click(function() {
    $(".change_text_tb").html('Chỉnh sửa chức vụ <span class="font-medium">Nhân viên<p>thất bại !</p>');
});
$(".btnluu").click(function() {
    $(".change_text_tc").html('Chỉnh sửa chức vụ <span class="font-medium">Nhân viên<p>thành công!</p>');
});
$(".btnhuy_yeucau").click(function() {
    $(".change_text_tb").html('Chỉnh sửa <span class="font-medium">Yêu cầu 1</span> thành công!');
});
$(".btnluu_yeucau").click(function() {
    $(".change_text_tc").html('Chỉnh sửa <span class="font-medium">Yêu cầu 1</span> thất bại!');
});
$(".js_xoachucvu").click(function() {
    $(".h4_change").html('Xóa chức vụ');
    $(".text_before_change").html('Bạn có chắc chắn muốn xóa chức vụ <p class="font-medium">Nhân viên?</p> ');
    $(".change_text_tc").html('Xóa chức vụ <span class="font-medium">Nhân viên</span> thành công!');
    $(".change_text_tb").html('Xóa chức vụ <span class="font-medium">Nhân viên</span> thất bại!');
});
$(".js_xoa_yc").click(function() {
    $(".h4_change").html('Xóa yêu cầu công việc');
    $(".text_before_change").html(
        'Bạn có chắc chắn muốn xóa yêu cầu công việc <p class="font-medium">Yêu cầu 1?</p> ');
    $(".change_text_tc").html('Xóa <span class="font-medium">Yêu cầu 1</span> thành công!');
    $(".change_text_tb").html('Xóa <span class="font-medium">Yêu cầu 1</span> thất bại!');
});
$(".js_themchucvu").click(function() {
    $(".h4_chucvu").html('Thêm chức vụ');
    $(".btnhuy").click(function() {
        $(".change_text_tb").html(
            'Thêm mới vị trí công việc <span class="font-medium">Nhân viên</span><p>thất bại!</p>');
    });
    $(".btnluu").click(function() {
        $(".change_text_tc").html(
            'Thêm mới vị trí công việc <span class="font-medium">Nhân viên</span><p>thành công!</p>'
            );
    });
});
$(".sua_yccv").click(function() {
    $(".h4_yccv").html('Chỉnh sủa yêu cầu công việc');
    $(".btnhuy_yeucau").click(function() {
        $(".change_text_tb").html('Chỉnh sửa yêu cầu công việc thất bại!');
    });
    $(".btnluu_yeucau").click(function() {
        $(".change_text_tc").html('Chỉnh sửa yêu cầu công việc thành công!');
    });
});
</script>