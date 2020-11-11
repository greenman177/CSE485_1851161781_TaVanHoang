<?php
require ('config.php');
include ('../include/function.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Post Managerment</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="baitaplon/style.css">
</head>

<body>

    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-light bg-danger">
            <a class="navbar-brand" href="/baitaplon/index.php">DaiHocTonDucThang</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" name="txtUserID" id="txtUserID"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="#">Log Out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="mt-5">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-unstyled list-group">
                        <a class="list-group-item list-group-item-action text-center" href="#"><i
                                class="fas fa-users"> User Management</i></a>
                        <a class="list-group-item active list-group-item-action text-center"
                            href="post-managerment.php"><i class="fas fa-edit"> Post Management</i></a>
                    </ul>
                </div>
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="active-pink-3 active-pink-4 mb-4">
                                <input class="form-control" type="text" name="title" id="title"
                                    placeholder="Search Post's Title">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Search" class="btn btn-outline-dark btn-md" name="search"
                                id="search">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table-hover table-bordered table table-striped table-dark">
                            <thead class="">
                                <tr>
                                    <th>Post Id</th>
                                    <th>Topic</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Edit Post</th>
                                    <th>Delete Post</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                        $sql="SELECT * FROM posts";
                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                        ?>
                                <tr>
                                    <td scope="row"><?php echo $row['postid'];?></td>
                                    <td><?php echo $row['topic'];?></td>
                                    <td><?php echo $row['author'];?></td>
                                    <td><?php echo $row['title'];?></td>
                                    <td><?php echo $row['created_at'];?></td>
                                    <td><?php echo $row['updated_at'];?></td>
                                    <td><a class="d-flex justify-content-center"
                                            href="edit-post.php?id=<?php echo $row['postid']; ?>"><i
                                                class="fas fa-edit"></i></a></td>
                                    <td><a class="d-flex justify-content-center"
                                            href="delete-post.php?id=<?php echo $row['postid']; ?>"><i
                                                class="far fa-trash-alt"></i></a></td>
                                </tr>
                                <?php
                            }
                        ?>
                            </tbody>
                        </table>
                    </div>
                    <a name="" id="" class="btn btn-lg btn-outline-success" href="/baitaplon/admin/create-post.php"
                        role="button">Create new Post</a>
                </div>
            </div>
        </main>
    </div>

    <section id="footer" style="background-color: #333;" class="mt-5">
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/1e9d4d2468.js" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $("#search").click(function() {

            //    Lấy giá trị:
            var title = $("#title").val();
            // Xử lý truyền -- nhận bằng Ajax
            if (title === '') {
                alert("Chưa nhập tiêu đề bài viết !");
            } else {
                $.ajax({
                    //Xu ly truyen
                    url: 'search-post.php',
                    type: 'POST',
                    data: {
                        title: title
                    },
                    dataType: 'json',
                    //Xy ly gia tri tra ve
                    success: function(res) {
                        // var obj = $.parseJSON(res);
                        $("tbody").empty();
                        for (var i = 0; i < res.length; i++) {
                            var id = res[i]['postid'];
                            var topic = res[i]['topic'];
                            var author = res[i]['author'];
                            var title = res[i]['title'];
                            var created_at = res[i]['created_at'];
                            var updated_at = res[i]['updated_at'];
                            $("tbody").append(
                                "<tr>" +
                                "<td>" + id + "</td>" +
                                "<td>" + topic + "</td>" +
                                "<td>" + author + "</td>" +
                                "<td>" + title + "</td>" +
                                "<td>" + created_at + "</td>" +
                                "<td>" + updated_at + "</td>" +
                                "<td>" +
                                "<a class='d-flex justify-content-center' href='edit-post.php?id=" +
                                id + "'><i class='fas fa-edit'>" + "</i>" + "</a>" +
                                "</td>" +
                                "<td>" +
                                "<a class='d-flex justify-content-center' href='delete-post.php?id=" +
                                id + "'><i class='far fa-trash-alt'>" + "</i>" +
                                "</a>" + "</td>" +
                                "</tr>"
                            );
                        }
                    }
                })
            }
        })
    })
    </script>
</body>

</html>