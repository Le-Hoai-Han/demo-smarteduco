@extends('master.footer')
@section('register')
<div class="row">
    <div class="col-lg-7 col-sm-0 content_register_left"><img src="{{url('reg123/img')}}/Saly-31.png" /></div>
    <div class="col-lg-5 col-sm-12 content_register_right">
        <form method="post" action="{{route('register.store')}}">
            @csrf
            <h1>Đăng kí</h1>
            <input type="text" name="name" placeholder="Họ và tên"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Mật khẩu"><br>
            <input type="password" name="repassword" placeholder="Nhập lại mật khẩu"><br>
            <button>
                Đăng ký
            </button>
        </form>
    </div>

</div>
@stop()
@extends('master.header')