@extends('index');
@section('page')
<div class="wthree-pro">
    <h2>Đăng kí</h2>
</div>
@if($message = Session::get('fail'))
<div class="alert alert-success" role="alert">
    <p style="color: white">{{$message}}</p>
</div>
@endif	

<form action="{{route('addregister')}}" method="post">
    @csrf

    <div class="pom-agile" style="margin-bottom:10px">
        <input  placeholder="Nhập tên" name="name" id="name" class="pass" type="text" required="">
    </div>

    <div class="pom-agile" style="margin-bottom:10px">
        <input  placeholder="Nhập SĐT" name="SDT" id="SDT" class="SDT" type="number" required="">
    </div>

    <div class="pom-agile">
        <input placeholder="Nhập E-mail" name="email" id="email"class="email" type="email" required="">
    </div>

    <div class="pom-agile">
        <input placeholder="Nhập địa chỉ" name="diachi" id="diachi"class="diachi" type="text" required="">
    </div>

    <div class="pom-agile">
        <input  placeholder="Nhập mật khẩu" name="password" id="password" class="pass" type="password" required="">
    </div>


    <div class="sub-w3l">
        <h6><a href="{{route('login')}}">Quay lại đăng nhập</a></h6>
        <div class="right-w3l">
            <input type="submit" value="Đăng kí">
        </div>
    </div>
</form>
        
@endsection