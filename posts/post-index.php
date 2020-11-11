<?php
require ('../admin/config.php');
include ('../include/function.php');
$post_id=$_GET['id'];
$post=getOnePost($post_id);
?>

<!doctype html>
<html lang="en">
  <head>
    <title><?php echo $post['title']; ?></title>
    <link rel="shortcut icon" href="https://www.tdtu.edu.vn/sites/www/files/TDTU-favicon.png" />

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--CSS-->
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <header>
        <div class="container-fluid bg-danger">
            <div class="container">
                <div class="row" style="height: 30px;">
                    <div class="col-11 col-md-6 p-0 p-md-2">
                        <ul class="list-unstyled d-flex nav-top flex-nowrap">
                            <li class="mr-2"><a class="text-white" href="#"><i class="fa fa-university"></i></a></li>
                            <li><a class="text-white" href="#">Trường</a></li>
                            <li><a class="text-white" href="#">|Khoa</a></li>
                            <li><a class="text-white" href="#">|Viện</a></li>
                            <li><a class="text-white" href="#">|Trung tâm</a></li>
                            <li><a class="text-white" href="#">|Thư viện</a></li>
                        </ul>
                    </div>
                    <div class="d-none d-md-block col-md-5">
                        <ul class="list-unstyled d-flex nav-top float-right">
                            <li class="mr-2"><a class="text-white" href="#"><i class="fa fa-user"></i></a></li>
                            <li><a class="text-white" href="https://www.tdtu.edu.vn/vien-chuc">Giảng viên/Viên chức</a></li>
                            <li><a class="text-white" href="https://www.tdtu.edu.vn/sinh-vien"> | Sinh viên</a></li>
                            <li><a class="text-white" href="http://ceca.tdtu.edu.vn/"> | Cựu sinh viên</a></li>
                            <li><a class="text-white" href="/baitaplon/login/login-page.php">| Login</a></li>
                        </ul>
                    </div>
                    <div class="col-1 col-md-1 float-right p-0">
                        <a href="https://www.tdtu.edu.vn/en"><img src="https://www.tdtu.edu.vn/themes/_logo/flag-en.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: rgb(241, 230, 193);" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <a href="/baitaplon/index.php">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/Brand-left-vi-1_0_0.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-md-6 d-none d-md-block">
                        <img src="https://tdtu.edu.vn/sites/www/files/Brand-10-vi.png" class="float-right img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    </div>
                    <div class="col-12" style="border-top: 1px red solid;">
                        <nav class="navbar navbar-expand-sm navbar-light">
                            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="collapsibleNavId">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-dark" href="https://www.tdtu.edu.vn/gioi-thieu">Giới thiệu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-dark" href="https://www.tdtu.edu.vn/giao-duc">Giáo dục</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-dark" href="https://www.tdtu.edu.vn/khoa-hoc-cong-nghe">Khoa học - Công nghệ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-dark" href="https://www.tdtu.edu.vn/quoc-te-hoa">Quốc tế hóa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link font-weight-bold text-dark" href="https://www.tdtu.edu.vn/tuyen-sinh">Tuyển sinh</a>
                                    </li>
                                </ul>
                                <a name="" id="search" class="btn" href="#" role="button"><i class="fa fa-search"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="container mb-5">
        <ul class="list-group list-group-horizontal-md">
            <li class="list-group-item"><a href="/baitaplon/index.php">Trang chủ</a></li>
            <li class="list-group-item"><?php echo $post['topic'];?></li>
        </ul>
        <div class="row mt-5">
            <div class="col-8">
                <h3><?php echo $post['title']; ?></h3>
                <ul class="" style="list-style-type: none;">
                    <li class="d-inline-block">TDTU, </i>
                    <li class="d-inline-block"><?php echo $post['created_at']; ?>, </li>
                    <li class="d-inline-block">GMT+7</li>
                </ul>
                <div class="social-media-sharing">
                    <ul class="float-right" style="list-style-type: none;">
                        <li class="d-inline-block">
                            <a target="_blank" class="facebook-share share" href="#" title="Facebook">
                                        <img alt="Facebook" src="https://www.tdtu.edu.vn/modules/social_media/icons/facebook_share.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a target="_blank" class="linkedin share" href="#" title="Linkedin">
                                        <img alt="Linkedin" src="https://www.tdtu.edu.vn/modules/social_media/icons/linkedin.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a target="_blank" class="twitter share" href="#" title="Twitter">
                                        <img alt="Twitter" src="https://www.tdtu.edu.vn/modules/social_media/icons/twitter.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a class="email share" href="#" title="Email">
                                        <img alt="Email" src="https://www.tdtu.edu.vn/modules/social_media/icons/email.svg"></a>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="/baitaplon/image/<?php echo $post['image'];?>" class="img-fluid mt-5"
                            style="width: 895px; heigh: 250px;" alt="Responsive image">
                    <p class="post-content mt-5 p-3"><?php echo $post['body']; ?></p>
                </div>
                <div class="social-media-sharing">
                    <ul class="float-right" style="list-style-type: none;">
                        <li class="d-inline-block">
                            <a target="_blank" class="facebook-share share" href="#" title="Facebook">
                                        <img alt="Facebook" src="https://www.tdtu.edu.vn/modules/social_media/icons/facebook_share.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a target="_blank" class="linkedin share" href="#" title="Linkedin">
                                        <img alt="Linkedin" src="https://www.tdtu.edu.vn/modules/social_media/icons/linkedin.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a target="_blank" class="twitter share" href="#" title="Twitter">
                                        <img alt="Twitter" src="https://www.tdtu.edu.vn/modules/social_media/icons/twitter.svg"></a>
                        </li>
                        <li class="d-inline-block">
                            <a class="email share" href="#" title="Email">
                                        <img alt="Email" src="https://www.tdtu.edu.vn/modules/social_media/icons/email.svg"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-4">
                <h3 class="ml-3">CHUYÊN MỤC</h3>
                <ul style="list-style-type: none;" class="ml-3 mt-3">
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/hoat-dong-chung" hreflang="vi">Hoạt động chung</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/giao-duc" hreflang="vi">Giáo dục</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/khoa-hoc-cong-nghe" hreflang="vi">Khoa học-Công nghệ</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/quoc-te-hoa" hreflang="vi">Quốc tế hóa</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/quan-he-cong-dong" hreflang="vi">Quan hệ cộng đồng</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/phat-trien-ben-vung" hreflang="vi">Phát triển bền vững</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/dien-gia-cong-chung" hreflang="vi">Diễn giả công chúng</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/viet-ve-tdtu" hreflang="vi">Viết về TDTU</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/sinh-vien" hreflang="vi">Sinh viên</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/doan-the" hreflang="vi">Đoàn thể</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/tin-tren-bao" hreflang="vi">Tin trên báo</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/thong-bao" hreflang="vi">Thông báo</a></span></div></li>
                    <li class="view-list-item"><div class="views-field views-field-name"><span class="field-content"><a href="www.tdtu.edu.vn/tin-tuc/tap-but" hreflang="vi">Tạp bút</a></span></div></li>
                </ul>
                <h3 class="ml-3">BÀI VIẾT MỚI</h3>
                <ul style="list-style-type: none;" class="row mt-3">
                    <li class="row mt-3">
                        <a href="https://www.tdtu.edu.vn/tin-tuc/2020-11/dai-hoc-ton-duc-thang-khai-giang-nam-hoc-moi-2020-2021" class="col-md-4"><img src="https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Nov/khai-giang-TDTU/khai-giang-2021-0.jpg?itok=-AOGrier" alt="" style="width: 90px; height:60.34px;"></a>
                        <a href="https://www.tdtu.edu.vn/tin-tuc/2020-11/dai-hoc-ton-duc-thang-khai-giang-nam-hoc-moi-2020-2021" class="col-md-8"><p style="font-size: 16px; line-height: 20px;">Đại học Tôn Đức Thắng khai giảng năm học mới 2020-2021</p></a>
                    </li>
                    <li class="row mt-3">
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/dai-hoc-ton-duc-thang-cap-hoc-bong-cho-luu-hoc-sinh-sau-dai-hoc" class="col-md-4"><img src="https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Nov/hoc-bong-sdh/hoc-bong-0.jpg?itok=JZfbpBXH" alt="" style="width: 90px; height:60.34px;"></a>
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/dai-hoc-ton-duc-thang-cap-hoc-bong-cho-luu-hoc-sinh-sau-dai-hoc" class="col-md-8"><p style="font-size: 16px; line-height: 20px;">Đại học Tôn Đức Thắng cấp học bổng cho lưu học sinh sau đại học</p></a>
                    </li>
                    <li class="row mt-3">
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/doanh-nghiep-truyen-lua-cho-sinh-vien-nganh-xay-dung" class="col-md-4"><img src="https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Nov/ktct/ktct-0.jpg?itok=-92_rEFA" alt="" style="width: 90px; height:60.34px;"></a>
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/doanh-nghiep-truyen-lua-cho-sinh-vien-nganh-xay-dung" class="col-md-8"><p style="font-size: 16px; line-height: 20px;">Doanh nghiệp “truyền lửa” cho sinh viên ngành Xây dựng</p></a>
                    </li>
                    <li class="row mt-3">
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/khai-giang-nam-hoc-2020-2021-tai-co-so-bao-loc" class="col-md-4"><img src="https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Nov/Khai-giang-BL/khai-giang-bl.jpg?itok=utLcBFb_" alt="" style="width: 90px; height:60.34px;"></a>
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-11/khai-giang-nam-hoc-2020-2021-tai-co-so-bao-loc" class="col-md-8"><p style="font-size: 16px; line-height: 20px;">Khai giảng năm học 2020-2021 tại Cơ sở Bảo Lộc</p></a>
                    </li>
                    <li class="row mt-3">
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-10/nhu-cau-nguon-nhan-luc-chat-luong-cao-cho-nganh-dong-tau" class="col-md-4"><img src="https://www.tdtu.edu.vn/sites/www/files/styles/small/public/articles/2020/Oct/VIMATEC/vimatec_0.jpg?itok=tDzRC6DT" alt="" style="width: 90px; height:60.34px;"></a>
                        <a href="https://www.tdtu.edu.vn/index.php/tin-tuc/2020-10/nhu-cau-nguon-nhan-luc-chat-luong-cao-cho-nganh-dong-tau" class="col-md-8"><p style="font-size: 16px; line-height: 20px;">Nhu cầu nguồn nhân lực chất lượng cao cho ngành đóng tàu</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <section id="footer" style="background-color: #333;">
        <div class="container pt-5 mt-2">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6 class="text-white text-uppercase mb-3">GIÁO DỤC</h6>
                            <a style="color: rgb(156, 150, 150);" href="https://admission.tdtu.edu.vn/dai-hoc/danh-muc-nganh-dai-hoc-2019" class="event-h">Danh mục ngành</a>
                            <a style="color: rgb(156, 150, 150);" href="https://undergrad.tdtu.edu.vn/huong-dan" class="event-h">Hướng dẫn học vụ</a>
                            <a style="color: rgb(156, 150, 150);" href="https://student.tdtu.edu.vn/" class="event-h">Sinh viên</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/giao-duc/cong-khai-thong-tin" class="event-h">Công khai thông tin</a>
                            <a style="color: rgb(156, 150, 150);" href="http://tracuuvanbang.tdtu.edu.vn/" class="event-h">Tra cứu văn bằng</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <h6 class="text-white text-uppercase mb-3">KHOA HỌC-CÔNG NGHỆ</h6>
                            <a style="color: rgb(156, 150, 150);" href="https://science.tdtu.edu.vn/publications" class="event-h">Công bố mới</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://science.tdtu.edu.vn/san-pham/cong-bo-khoa-hoc" class="event-h">Đã công bố</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://science.tdtu.edu.vn/san-pham/bang-sang-che" class="event-h">Bằng sáng chế</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://science.tdtu.edu.vn/san-pham/tap-chi-khoa-hoc" class="event-h">Tạp chí khoa học</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://fostect.tdtu.edu.vn/" class="event-h">Quỹ khoa học-công nghệ</a>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h6 class="text-white text-uppercase mb-3">ĐƠN VỊ TRỰC THUỘC</h6>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/gioi-thieu/khoa-truong" class="event-h">Khoa-Trường</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/gioi-thieu/vien-trung-tam" class="event-h">Viện-Trung tâm</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/gioi-thieu/phong-ban" class="event-h">Phòng-Ban</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://vfis.tdtu.edu.vn/vi" class="event-h">Trường quốc tế Việt Nam-Phần Lan</a>
                        </div>
                        <div class="col-12 col-md-6">
                            <h6 class="text-white text-uppercase mb-3">THÔNG TIN</h6>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/gioi-thieu/lien-he" class="event-h">Liên hệ</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/tuyen-dung" class="event-h">Tuyển dụng</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://student.tdtu.edu.vn/sv-tap-su" class="event-h">Trải nghiệm</a>
                            <br>
                            <a style="color: rgb(156, 150, 150);" href="https://www.tdtu.edu.vn/sitemap" class="event-h">Sơ đồ trang</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <h6 class="text-white text-uppercase mb-3">ĐẠI HỌC TÔN ĐỨC THẮNG</h6>
                    <p style="color:rgb(156, 150, 150);">Số 19 Nguyễn Hữu Thọ, Phường Tân Phong, Quận 7, TP. Hồ Chí Minh, Việt Nam.</p>
                    <p style="color:rgb(156, 150, 150);">Kết nối với TDTU
                         <a href="https://www.facebook.com/tonducthanguniversity">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/Home/connect-tdtu/Facebook-new.png" alt="">
                        </a>
                        <a href="https://www.youtube.com/user/DhTonDucThang">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/Home/connect-tdtu/Youtube-new.png" alt="">
                        </a>
                        <a href="https://twitter.com/tonducthanguniv">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/Home/connect-tdtu/Twitter-new.png" alt="">
                        </a>
                        <a href="https://www.linkedin.com/school/ton-duc-thang-university">
                            <img src="https://www.tdtu.edu.vn/sites/www/files/Home/connect-tdtu/linkedin1.jpg" alt="">
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="privacy" style="background-color: #1F1E23;">
        <p class="text-center text-white py-3 m-0">Copyright © 2020 Đại học Tôn Đức Thắng</p>
    </section>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Optional JavaScript -->
    <script>
        $(document).ready(function () {
            $("#search").click(function () { 
                $("#form-search").toggleClass("form-search-active");
            });
        });
    </script>
  </body>
</html>