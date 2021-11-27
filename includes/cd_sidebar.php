<?
$danh_sach = ['/quan_ly_tieu_chi_danh_gia.html', '/quan_ly_tieu_chi_nang_luc.html'];
$danh_sach_1 =['/ketquadanhgia-nhanvien.html','/ketquadanhgia-phongban.html'];
?>
<div class="sidebar ">
    <div class="sidebar_ttcn d_flex align_c content_c ">
        <div class="img_sidebar">
            <img class="" src="../img/logo.png" alt="">
        </div>
    </div>
    <div class="side_body">
        <div class="ul_sidebar">
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/trang_chu_sau_dang_nhap.html') ? "active" : "" ?>">
                <a href='/trang_chu_sau_dang_nhap.html'>
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star  ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_1.png" alt="Trang chủ">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5 ">Trang chủ</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="sidebar_item sidebar_item_kep">
                <div class="class_li_side_bar li_sidebar sidebar_item_don">
                    <div class="item_sidebar item_sidebar_cha d_flex flex_star">
                        <div class="img_li d_flex space_around align_c">
                            <img src="../img/sidebar_2.png" alt="Quản lý tiêu chí đánh giá">
                        </div>
                        <p class="p_item_sidebar font_ss16 font_w5 ">Quản lý tiêu
                            chí đánh giá</p>
                    </div>
                </div>
                <ul
                    class="sidebar_sub hopdong_sub position_r <?php echo (in_array($_SERVER['REDIRECT_URL'], $danh_sach)) ? "active" : "" ?>">
                    <li
                        class="sidebar_sub_item sidebar_item_don d_flex align_c <?php echo ($_SERVER['REDIRECT_URL'] == '/quan_ly_tieu_chi_danh_gia.html') ? "sub_li_active" : "" ?> ">
                        <div class="point"></div>
                        <a href="/quan_ly_tieu_chi_danh_gia.html" class="p_item_sidebar font_ss16 font_w5">Danh sách
                            tiêu chí đánh giá</a>
                    </li>
                    <li
                        class="sidebar_sub_item sidebar_item_don d_flex align_c <?php echo ($_SERVER['REDIRECT_URL'] == '/quan_ly_tieu_chi_nang_luc.html') ? "sub_li_active" : "" ?> ">
                        <div class="point"></div>
                        <a href="/quan_ly_tieu_chi_nang_luc.html" class="p_item_sidebar font_ss16 font_w5">Đề đánh giá
                            năng lực</a>
                    </li>
                </ul>
            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/quan_ly_de_kiem_tra_nang_luc.html') ? "active" : "" ?>">
                <div class="li_sidebar">
                    <div class="accordion">
                        <a href="/quan_ly_de_kiem_tra_nang_luc.html"
                            class="item_sidebar item_sidebar_cha d_flex flex_star">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_3.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5 ">Quản lý đề kiểm tra năng lực</p>
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/quan_ly_ke_hoach_danh_gia.html') ? "active" : "" ?>">

                <a href="/quan_ly_ke_hoach_danh_gia.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_4.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Quản lý kế hoạch đánh giá</p>
                        </div>
                    </div>
                </a>

            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/quanly-phieudanhgia.html') ? "active" : "" ?>">

                <a href="/quanly-phieudanhgia.html" class="item_sidebar item_sidebar_cha d_flex flex_star">
                    <div class="li_sidebar">
                        <div class="img_li d_flex space_around align_c">
                            <img src="../img/sidebar_5.png" alt="">
                        </div>
                        <p class="p_item_sidebar font_ss16 font_w5">Quản lý phiếu đánh giá</p>
                    </div>
                </a>

            </div>
            <div class="sidebar_item sidebar_item_kep ">
                <div class="li_sidebar class_li_side_bar sidebar_item_don">
                    <div class="item_sidebar item_sidebar_cha d_flex flex_star ">
                        <div class="img_li d_flex space_around align_c">
                            <img src="../img/sidebar_6.png" alt="">
                        </div>
                        <p class="p_item_sidebar font_ss16 font_w5">Quản lý kết quả đánh giá</p>
                    </div>
                </div>
                <ul
                    class="sidebar_sub banggia_sub_1 position_r <?php echo (in_array($_SERVER['REDIRECT_URL'] , $danh_sach_1) ? "active" : "")?>">
                    <li
                        class="sidebar_sub_item d_flex align_c sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/ketquadanhgia-nhanvien.html') ? "sub_li_active" : "" ?>">
                        <div class="point"></div>
                        <a href="/ketquadanhgia-nhanvien.html" class="p_item_sidebar font_ss16 font_w5">Kết quả nhân
                            viên</a>
                    </li>
                    <li
                        class="sidebar_sub_item d_flex align_c sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/ketquadanhgia-phongban.html') ? "sub_li_active" :"" ?>">
                        <div class="point"></div>
                        <a href="/ketquadanhgia-phongban.html" class="p_item_sidebar font_ss16 font_w5">Kết quả phòng
                            ban</a>
                    </li>
                </ul>
            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/lotrinhthangtien.html') ? "active" : "" ?>">

                <a href="/lotrinhthangtien.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_7.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Lộ trình thăng tiến</p>
                        </div>
                    </div>
                </a>

            </div>
            <div
                class="sidebar_item  sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/phanquyen.html') ? "active" : "" ?>">

                <a href="/phanquyen.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_8.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Phân quyền</p>
                        </div>
                    </div>
                </a>

            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/xoaganday-dulieuxoaganday.html') ? "active" : "" ?>">

                <a href="/xoaganday-dulieuxoaganday.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_9.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Dữ liệu đã xóa gần đây</p>
                        </div>
                    </div>
                </a>

            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/caidat_caidatchung.html') ? "active" : "" ?>">

                <a href="/caidat_caidatchung.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_10.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Cài đặt</p>
                        </div>
                    </div>
                </a>

            </div>
            <div
                class="sidebar_item sidebar_item_don <?php echo ($_SERVER['REDIRECT_URL'] == '/chuyen_doi_so.html') ? "active" : "" ?>">

                <a href="/chuyen_doi_so.html">
                    <div class="li_sidebar">
                        <div class="item_sidebar d_flex flex_star ">
                            <div class="img_li d_flex space_around align_c">
                                <img src="../img/sidebar_11.png" alt="">
                            </div>
                            <p class="p_item_sidebar font_ss16 font_w5">Chuyển đổi số 365</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </div>
</div>