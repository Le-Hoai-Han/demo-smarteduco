<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SmartEduco</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{url('mas123')}}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{url('mas123')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{url('mas123')}}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class="d-flex align-items-center">
    <div class="menu_mobile" id="menu_mobile">
        <ul>
                        <li><a class="" href="#">Trang chủ</a></li>
                        <li><a class="" href="#">Khóa học</a></li>
                        <li><a class="" href="#">Doanh nghiệp</a></li>
                        <li><a class="" href="#">Trường học</a></li>
                        <li><a href="#" class="">Đăng nhập</a></li>
                        <li><a href="{{route('register.index')}}" class="">Đăng ký</a></li>
        </ul>
        </div>
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html"><span><img src="{{url('mas123/img')}}/Frame(10).png" /></span></a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="#">Trang chủ</a></li>
                    <li><a class="nav-link scrollto" href="#">Khóa học</a></li>
                    <li><a class="nav-link scrollto" href="#">Doanh nghiệp</a></li>
                    <li><a class="nav-link scrollto " href="#">Trường học</a></li>
                    <!-- <li>
                        <div class="header-right">
                            <button class="btn">
                                <img src="{{url('mas123/img')}}/Search.png"></img>
                            </button>
                            <button class="btn">
                                <img src="{{url('mas123/img')}}/Group 836.png"></img>
                            </button>
                            <button class="btn">
                                <img src="{{url('mas123/img')}}/Group 834.png"></img>
                            </button>
                            <button id="user" class="btn">
                                <img src="{{url('mas123/img')}}/Group 832.png"><span>Trần Nhật Khánh</span></img>
                            </button>
                        </div>
                    </li> -->


                    <li>
                        <img src="{{url('mas123/img')}}/Search.png"></img>
                    </li>
                    <li><a href="#" class="get-started-btn scrollto">Đăng nhập</a></li>
                    <li><a href="#" class="get-started-btn scrollto">Đăng ký</a></li>
                </ul>
                <i id="icon_menu" class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <button class="btn btn_mobile">
                <img src="{{url('mas123/img')}}/Search.png"></img>
            </button>
        </div>
    </header><!-- End Header -->
    @yield('main')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 footer-contact">
                        <img src="{{url('mas123/img')}}/Frame.png" />
                        <p><br>
                            CÔNG TY TNHH 3D SMART SOLUTIONS <br><br>
                        </p>
                        <div class="lien_he">
                            <div class="lh">
                                <img src="{{url('mas123/img')}}/vi_tri.png" />
                                <span>9/9, Đ. số 9, KP. 3, P. Linh Trung, TP. Thủ Đức, TP. HCM</span><br>
                            </div>
                            <div class="lh">
                                <img src="{{url('mas123/img')}}/phone.png" />
                                <span>028.730.47.788.</span><br>
                            </div>
                            <div class="lh">
                                <img src="{{url('mas123/img')}}/tin_nhan.png" />
                                <span>info@3ds.vn (24/7)</span><br>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Khóa học</h4>
                        <p><br><br></p>
                        <div class="group_khoahoc">
                            <div class="lk">
                                <a href="#"><img src="{{url('mas123/img')}}/Group 999.png" />
                                    <span>Khóa học in 3D</span><br>
                                </a>
                            </div>
                            <div class="lk">
                                <a href="#">
                                    <img src="{{url('mas123/img')}}/Group 1004.png" />
                                    <span>Khóa học thiết kế ngược</span><br>
                                </a>
                            </div>
                            <div class="lk">
                                <a href="#">
                                    <img src="{{url('mas123/img')}}/Group 1000.png" />
                                    <span>Khóa học Master Cam</span><br>
                                </a>
                            </div>
                            <div class="lk">
                                <a href="#">
                                    <img src="{{url('mas123/img')}}/Group 1003.png" />
                                    <span>Khóa học đo lường 3D</span><br>
                                </a>
                            </div>
                            <div class="lk">
                                <a href="#">
                                    <img src="{{url('mas123/img')}}/Group 1001.png" />
                                    <span>Khóa học thiết kế kiểu dáng</span><br>
                                </a>
                            </div>
                            <div class="lk">
                                <a href="#">
                                    <img src="{{url('mas123/img')}}/Group 1002.png" />
                                    <span>Khám khóa để trở thành 3DS</span><br>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <div class="group_doanhnghiep">
                            <h4>Doanh nghiệp</h4>
                            <p><br><br></p>
                        </div>
                        <div class="lk">
                            <a href="#">
                                <span>Dành cho doanh nghiệp</span><br>
                            </a>
                        </div>
                        <div class="lk">
                            <a href="#">
                                <span>Danh cho trường học</span><br>
                            </a>
                        </div>
                        <div class="lk">
                            <a href="#">
                                <span>Kết nối với chúng tôi</span><br>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-1 col-md-6 footer-links">
                        <div class="group_truonghoc">
                            <h4>Trường học</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    ©2021 eTraining-3DS. All rights reserved
                </div>
            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href=""><img src="{{url('mas123/img')}}/Frame (5).png" /></a>
                <a href=""><img src="{{url('mas123/img')}}/Frame (1).png" /></a>
                <a href=""><img src="{{url('mas123/img')}}/Frame (2).png" /></a>
                <a href=""><img src="{{url('mas123/img')}}/Frame (3).png" /></a>
                <a href=""><img src="{{url('mas123/img')}}/Frame (4).png" /></a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <!-- Vendor JS Files -->
    <script src="{{url('mas123')}}/assets/vendor/aos/aos.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{url('mas123')}}/assets/js/main.js"></script>
<script>
    var menu = document.getElementById('menu_mobile');
    var icon_menu = document.getElementById('icon_menu');
        icon_menu.onclick=function(){
            if(icon_menu.className === 'bi-list'){
                alert('hi')
            }
            else{
                menu.style.display='block'
            }
        }
</script>
</body>

</html>