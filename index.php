<?php
require ('../baitaplon/admin/config.php');
include ('../baitaplon/include/function.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Đại Học Tôn Đức Thắng</title>
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
                        <a href="index.php">
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
    <section id="slide">
        <div class="container"  style="position: relative;">
            <form class="form-inline my-2 my-lg-0 float-right" id="form-search">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Tìm</button>
            </form>
        </div>
        <div class="container-fluid">
            <div id="carouselId" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselId" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner slide" role="listbox">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://www.tdtu.edu.vn/sites/www/files/gva-sliderlayer-upload/top%20400-02-02-bptly1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://www.tdtu.edu.vn/sites/www/files/gva-sliderlayer-upload/Admission-2020-2-8uetle.jpg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="news pb-5">
        <h2 class="text-uppercase text-center mt-4 text-primary">Tin tức</h2>
        <div class="container">
            <div class="row">
            <?php
            $sql="SELECT * FROM posts";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){
            ?>

                <div class="col-12 col-md-4">

                    <a href="./posts/post-index.php?id=<?php echo $row['postid']; ?>"><img src="/baitaplon/image/<?php echo $row['image'];?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></a>
                    <a class="text-dark font-weight-bold" href="./posts/post-index.php?id=<?php echo $row['postid']; ?>"><?php echo $row['title'];?></a>
                    <p><span class="text-uppercase text-danger"><?php echo $row['topic'];?></span> | <?php echo $row['created_at'];?></p>
                    <p><?php echo $row['body'];?></p>
                </div>
            
            <?php
            }
            ?>   
            </div>
            <div class="row another-news float-right p-2">
                <a href="https://www.tdtu.edu.vn/tin-tuc"><h3 class="text-uppercase text-danger">tin khác >></h3></a>
            </div>
        </div>
    </section>
    <section class="event pb-5" style="background-color: rgb(241, 230, 193);">
        <h2 class="text-uppercase text-center mt-4 text-primary py-3">Sự kiện</h2>
        <div class="container pb-3" style="background-color: rgb(241, 230, 193);">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card text-left" style="background-color: rgb(241, 230, 193);">
                      <a href="https://www.tdtu.edu.vn/su-kien/2020/ngay-hoi-doanh-nghiep-cuu-sinh-vien-tdtu-2020"><img class="card-img-top" src="https://www.tdtu.edu.vn/sites/www/files/events/2020/Jul/ngay-hoi-doanh-nghiep.jpg" alt=""></a>
                      <div class="card-body">
                        <a href="https://www.tdtu.edu.vn/su-kien/2020/ngay-hoi-doanh-nghiep-cuu-sinh-vien-tdtu-2020"><h4 class="card-title">Ngày hội doanh nghiệp cựu sinh viên TDTU 2020</h4></a>
                        <p class="card-text">Có hơn 20 doanh nghiệp cựu sinh viên mở gian hàng tuyển dụng và giới thiệu sản phẩm tại sự kiện.</p>
                      </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="card text-left" style="background-color: rgb(241, 230, 193);">
                      <a href="https://www.tdtu.edu.vn/su-kien/2020/seminar-xac-dinh-tinh-toan-cac-chat-uc-che-tiem-nang-cua-protease-chinh-cua-sars-cov-2"><img class="card-img-top" src="https://www.tdtu.edu.vn/sites/www/files/events/2020/Jun/covid_0.jpg" alt=""></a>
                      <div class="card-body">
                        <a href="https://www.tdtu.edu.vn/su-kien/2020/seminar-xac-dinh-tinh-toan-cac-chat-uc-che-tiem-nang-cua-protease-chinh-cua-sars-cov-2"><h4 class="card-title">Seminar: Xác định tính toán các chất ức chế tiềm năng của Protease chính của SARS-CoV-2</h4></a>
                        <p class="card-text">Phòng quản lý phát triển khoa học công nghệ (DEMASTED) ĐH Tôn Đức Thắng thông báo Seminar khoa học định kỳ tháng 7/2020.</p>
                      </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row mb-2">
                        <div class="col-3 bg-danger text-white pt-1">
                            <h4>15</h4>
                            <hr style="border:0.5px solid white;">
                            <p>Tháng 5</p>
                        </div>
                        <div class="col-9">
                            <a href="https://www.tdtu.edu.vn/su-kien/2020/seminar-cac-thong-so-nhiet-hoa-va-co-che-phat-trien-cua-cum-silicon-pha-tap-boron" class="font-weight-bold event-h">Seminar: Các thông số nhiệt hóa và cơ chế phát triển của cụm Silicon pha tạp Boron</a>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3 bg-danger text-white pt-1">
                            <h4>7</h4>
                            <hr style="border:0.5px solid white;">
                            <p>Tháng 3</p>
                        </div>
                        <div class="col-9 mb-2">
                            <a href="https://www.tdtu.edu.vn/su-kien/2020/co-hoi-viec-lam-tai-truong-quoc-te-viet-nam-phan-lan" class="font-weight-bold event-h">Cơ hội việc làm tại Trường quốc tế Việt Nam-Phần Lan</a>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-3 bg-danger text-white pt-1">
                            <h4>28</h4>
                            <hr style="border:0.5px solid white;">
                            <p>Tháng 2</p>
                        </div>
                        <div class="col-9">
                            <a href="https://www.tdtu.edu.vn/su-kien/2019/cuoc-thi-khoi-nghiep-tdtu-startup-wings-2020" class="font-weight-bold event-h">Cuộc thi khởi nghiệp: TDTU Startup Wings 2020</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3 bg-danger text-white pt-1">
                            <h4>30</h4>
                            <hr style="border:0.5px solid white;">
                            <p>Tháng 12</p>
                        </div>
                        <div class="col-9">
                            <a href="https://www.tdtu.edu.vn/su-kien/2020/seminar-khoa-hoc-thang-122019-0" class="font-weight-bold event-h">Seminar khoa học tháng 12/2019</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row another-news float-right p-2" >
                <a href="https://www.tdtu.edu.vn/su-kien"><h3 class="text-uppercase text-danger">sự kiện khác >></h3></a>
            </div>
        </div>
    </section>
    <section class="choose pb-5">
        <h2 class="text-uppercase text-center mt-4 text-primary">CHỌN TDTU ĐỂ XÂY DỰNG TƯƠNG LAI, TẠI SAO?</h2>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/TDTU-front-thumb.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/-hoc-so-1-viet-nam"><p>1-TDTU là đại học số 1 Việt Nam và Top 1000 đại học tốt nhất thế giới về mọi mặt <br></p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-4">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/2-Hien-dai-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/dieu-kien-phuong-phap-day-va-hoc-chuyen-dung-hien-dai"><p>2-Điều kiện, phương pháp dạy và học chuyên dụng, hiện đại<br></p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-4">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/3-Luc-luong-hung-manh-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/luc-luong-chuyen-mon-hung-manh-va-chuyen-nghiep"><p>3-Lực lượng chuyên môn hùng mạnh và chuyên nghiệp<br></p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-3">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/4-chuong-trinh-tien-tien-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/chuong-trinh-giao-duc-dai-hoc-va-sau-dai-hoc-tien-tien"><p>4-Chương trình giáo dục đại học và sau đại học tiên tiến</p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-3">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/5-Moi-truong-hoc-tap-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/moi-truong-hoc-tap-tieu-chuan-quoc-te-5-sao"><p>5-Môi trường học tập tiêu chuẩn quốc tế 5 sao</p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-3">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/6-dau-ra-quoc-te-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/chu-truong-dao-tao-voi-chuan-dau-ra-tam-quoc-te"><p>6-Chuẩn đầu ra của giáo dục đạt tầm quốc tế</p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
                <div class="col-12 col-md-3">
                    <img class="w-100 border border-danger" src="https://www.tdtu.edu.vn/sites/www/files/Home/why-tdtu/7-Ren-luyen-new.jpg" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a class="event-h font-weight-bold text-center" href="https://www.tdtu.edu.vn/gioi-thieu/moi-truong-ren-luyen-tot-nhat"><p>7-Môi trường rèn luyện tốt nhất</p></a>
                    <hr style="width: 30%; border: 0.01cm solid black;">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 col-md-5 text-center">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/About/TDTU%20student_0_0.png" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <h2 class="text-uppercase text-primary">sinh viên tốt nghiệp tdtu</h2>
                    <div class="row">
                        <div class="col-2">
                            <i style="font-size: 50px; color: red;" class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="col-10">
                            <p class="font-weight-bold">Chuyên môn giỏi</p>
                            <p>Lý thuyết vững vàng, thực hành thành thạo; <span class="text-primary">100%</span> sinh viên tốt nghiệp TDTU có việc làm trong năm đầu tiên.</p>
                        </div>
                        <div class="col-2">
                            <i style="font-size: 50px; color: red;" class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="col-10">
                            <p class="font-weight-bold">Kỹ năng đa dạng</p>
                            <p>Phát triển tối đa năng lực bản thân với các kỹ năng mềm cần thiết: tiếng Anh (<span class="text-primary">IELTS 5.0</span>, Tin học <span class="text-primary">MOS 750</span>), Sinh tồn (<span class="text-primary">bơi 50m</span>), ...</p>
                        </div>
                        <div class="col-2">
                            <i style="font-size: 50px; color: red;" class="fa fa-thumbs-up"></i>
                        </div>
                        <div class="col-10">
                            <p class="font-weight-bold">Đạo đức chuẩn mực</p>
                            <p>Rèn luyện trong môi trường nghiêm túc: <span class="text-primary">Hiếu thảo</span> với cha mẹ, <span class="text-primary">Thượng tôn</span> pháp luật, <span class="text-primary">Tinh thần phụng sự</span> cộng đồng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="news pb-5">
        <div class="container ">
            <h2 class="text-uppercase text-center mt-4 text-primary">17 khoa</h2>
            <div class="row">
                <div class="col-3">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/Faculty/new/Khoa-CNTT-new.jpg" class="mb-3 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a href="" class=" event-h font-weight-bold">Công nghệ thông tin</a>
                </div>
                <div class="col-3">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/Faculty/new/Khoa-Duoc-new.jpg" class="mb-3 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a href="" class=" event-h font-weight-bold">Dược</a>
                </div>
                <div class="col-3">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/Faculty/cis.jpg" class="mb-3 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a href="" class=" event-h font-weight-bold">Giáo dục quốc tế</a>
                </div>
                <div class="col-3">
                    <img src="https://www.tdtu.edu.vn/sites/www/files/Faculty/new/Khoa-Ke-Toan-new.jpg" class="mb-3 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
                    <a href="" class=" event-h font-weight-bold">Kế toán</a>
                </div>
                <a name="" id="" class="btn btn-danger mx-auto mt-4" href="https://www.tdtu.edu.vn/gioi-thieu/khoa-truong" role="button">Xem thêm</a>
            </div>
        </div>
    </section>
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