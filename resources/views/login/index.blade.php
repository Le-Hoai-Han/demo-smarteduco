@extends('master.footer')
@section('login')
<div class="row login_content">
    <div class="col-lg-7 col-sm-0 content_login_left"><img src="{{url('log123/img')}}/Saly-1.png"></div>
    <div class="col-lg-5 col-sm-12 content_login_right">
        <form method="post" action="{{route('login.store')}}">
            @csrf
            <h1>Chào mừng bạn quay trở lại</h1>
            <input type="email" name="email" placeholder="Nhập mail hoặc số điện thoại"><br>
            <input type="password" name="password" placeholder="Mật khẩu"><br>
            <button class="dang-nhap">
                Đăng Nhập
            </button>
            <p>Bạn quên mật khẩu</p>
            <p>----Hoặc----</p>
            <button id="mxh"><img src="{{url('log123/img')}}/goolgle.png">Google</button>
            <button id="mxh"><img src="{{url('log123/img')}}/facebook.png">Facebook</button>
            <p>Bạn chưa có tài khoảng? <a href="#"> Đăng ký</a></p>
        </form>

    </div>

</div>
@stop()
@extends('master.header')