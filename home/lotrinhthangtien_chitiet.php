<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Lo trinh thang tien chitiet</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <div class="lotrinhthangtien_chitiet">
                            <div class="m_lotrinh_chitiet">
                                <div class="flex nenxanh-chutrang space br-t-10 tieude_phongban">
                                    <div class=" flex center-height">
                                        <p class="size-16 font-bold">Phòng nhân sự</p>
                                    </div>
                                    <div class="flex center-height c-pointer">
                                        <img src="../img/manhimg/themchucvu.png" class="flex center-height"
                                            alt="them chuc vu">
                                        <p class="size-14">Thêm chức vụ</p>
                                    </div>
                                </div>
                                <div class="nentrang">
                                    <div class="nenxam flex m_chitiet_phongban">
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
                                                        onclick="hienpopup('show_chinhsuachucvu')">
                                                        <img src="../img/manhimg/chinhsua.png"
                                                            class="flex center-height right-10" alt="chinh sua">
                                                        <p class="chuden size-14">Chỉnh sửa</p>
                                                    </div>
                                                    <div class="nd_con_menu_curd flex center-height"
                                                        onclick="hienpopup('show_themyccv')">
                                                        <img src="../img/manhimg/them.png"
                                                            class="flex center-height right-10" alt="chinh sua">
                                                        <p class="chuden size-14">Thêm yêu cầu công việc</p>
                                                    </div>
                                                    <div class="nd_con_menu_curd flex center-height br-b-10"
                                                        onclick="hienpopup('show_xacnhan')">
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
                                            <div class="flex just-end c-pointer">
                                                <div>
                                                    <img src="../img/manhimg/3chamx.png" class="" alt="them chuc vu">
                                                </div>
                                                <div class="show_menu_curd nentrang">
                                                    <div class="nd_con_menu_curd flex center-height"
                                                        onclick="hienpopup('show_chinhsuachucvu')">
                                                        <img src="../img/manhimg/chinhsua.png"
                                                            class="flex center-height right-10" alt="chinh sua">
                                                        <p class="chuden size-14">Chỉnh sửa yêu cầu công việc</p>
                                                    </div>
                                                    <div class="nd_con_menu_curd flex center-height br-b-10"
                                                        onclick="hienpopup('show_xacnhan')">
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

</html>