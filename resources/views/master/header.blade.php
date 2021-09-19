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
    <link href="{{url('mas123')}}/assets/css/content.css" rel="stylesheet">
    <!-- Template Main JS File -->
    <script src="{{url('mas123')}}/assets/js/javascript.js"></script>

    <!-- =======================================================
  * Template Name: Presento - v3.3.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <header id="header" class=" row d-flex align-items-center">
        <label for="menu_mobile_input" class="menu_mobile_btn">
            <img src="{{url('mas123/img')}}/menu.png" /></label>
        <input type="checkbox" class="menu_input" name="" id="menu_mobile_input" />
        <label for="menu_mobile_input" class="menu_overlay"></label>

        <div class="menu_mobile" id="menu_mobile">
            <label for="menu_mobile_input" class="menu_mobile_close"><i class="bi bi-x-circle-fill"></i></label>
            <ul class="menu_mobile_list">
                @if(Auth::check())
                <li>
                    <a class="">Xin chào <span>@if(isset($user)){{$user->name}}@endif</span> </a>
                    <ul class="menu_mobile_list">
                        <li><a href="#"><i class="bi bi-bell"></i> Thông báo</a></li>
                        <li><a href="#"><i class="bi bi-cart-fill"></i>Giỏ hàng</a></li>
                        <li><a href="{{route('login.create')}}"><i class="bi bi-box-arrow-right"></i>Đăng xuất</a></li>
                    </ul>
                </li>
                @else
                <li><a href="{{route('login.index')}}" class="">Đăng nhập</a></li>
                <li><a href="{{route('register.index')}}" class="">Đăng ký</a></li>
                @endif
            </ul>
            <ul class="menu_mobile_list">
                <li><a class="menu_mobile_link" href="/"><i class="bi bi-house"></i>Trang chủ</a></li>
                <li><a class="menu_mobile_link" href="#"><i class="bi bi-book"></i>Khóa học</a></li>
                <li><a class="menu_mobile_link" href="#"><i class="bi bi-building"></i>Doanh nghiệp</a></li>
                <li><a class="menu_mobile_link" href="#"><i class="bi bi-shop"></i>Trường học</a></li>
            </ul>
            <!-- <ul class="menu_mobile_right">
                @if(Auth::check())
                <li class="dropdown">
                    <a class="">Xin chào<span>@if(isset($user)){{$user->name}}@endif</span> </a>
                    <ul>
                    <li><a href="#"><img src="{{url('mas123/img')}}/Group 836.png">Thông báo</a></li>
                                    <li><a href="#"> <img src="{{url('mas123/img')}}/Group 834.png">Giỏ hàng</a></li>
                                    <li><a href="{{route('login.create')}}"><img class="log-in" src="{{url('mas123/img')}}/log-in.png">Đăng xuất</a></li>
                    </ul>
                </li>
                @else
                <li><a href="{{route('login.index')}}" class="">Đăng nhập</a></li>
                <li><a href="{{route('register.index')}}" class="">Đăng ký</a></li>
                @endif
            </ul> -->
        </div>

        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="/"><span><img src="{{url('mas123/img')}}/Frame(10).png" /></span></a></h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <div class="nav_left">
                    <ul>
                        <li><a class="nav-link scrollto " href="/">Trang chủ</a></li>
                        <li class="dropdown"><a href="#"><span>Khóa học</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#"><span>Góc Sáng Tạo 3D Cho Bé (3D Space For Kids)</span></a></li>
                                <li class="dropdown"><a href="#"><span>Khóa học in 3D</span> <i class="bi bi-chevron-right"></i></a>
                                    <ul>
                                        <li><a href="#">In 3D Cơ Bản</a></li>
                                        <li><a href="#">(Fundamentals Of Additive Manufacturing)</a></li>

                                        <li><a href="#">In 3D nâng cao (Rapid prototyping and producing)</a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><span>Khóa học scan 3D</span></a></li>
                                <li><a href="#"><span>Khóa học thiết kế ngược</span></a></li>
                                <li><a href="#"><span>Khóa học thiết kế ngược</span></a></li>
                        </li>
                        <li><a href="#"><span>Khóa học MasterCam</span></a></li>

                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#">Khóa học</a></li>
                    <li><a class="nav-link scrollto" href="#">Doanh nghiệp</a></li>
                    <li><a class="nav-link scrollto " href="#">Trường học</a></li>
                    </ul>
                </div>

                <div class="nav_right">
                    <ul>
                        <li class="search">
                            
                            <input class="input_search" type="text" placeholder="Tìm kiếm khóa học của bạn"/>
                            <img class="img_search" src="{{url('mas123/img')}}/Search.png"></img>
                        </li>
                        @if(Auth::check())
                        <li class="dropdown"><a href="#"><button id="user" class="btn">
                                    <img src="{{url('mas123/img')}}/Group 832.png"><span>
                                        @if(isset($user))
                                        {{$user->name}}
                                        @endif
                                        <i class="bi bi-chevron-down"></i></span></img>
                                </button>

                                <ul>
                                    <li><a href="#"><i class="bi bi-bell"></i>Thông báo</a></li>
                                    <li><a href="#"> <i class="bi bi-cart-fill"></i>Giỏ hàng</a></li>
                                    <li><a href="{{route('login.create')}}"><i class="bi bi-box-arrow-right"></i>Đăng xuất</a></li>
                                </ul>
                        </li>
                        @else
                        <li><a href="{{route('login.index')}}" class="get-started-btn scrollto">Đăng nhập</a></li>
                        <li><a href="{{route('register.index')}}" class="get-started-btn scrollto">Đăng ký</a></li>
                        @endif

                    </ul>



                </div>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    @yield('register')
    @yield('login')
    @yield('main')
    <!-- Vendor JS Files -->
    <script src="{{url('mas123')}}/assets/vendor/aos/aos.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/php-email-form/validate.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/purecounter/purecounter.js"></script>
    <script src="{{url('mas123')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>

</body>

</html>