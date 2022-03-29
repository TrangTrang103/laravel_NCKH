@extends('index');
@section('page')
<div class="wthree-pro">
    <h2>Đăng nhập</h2>
</div>
@if($message = Session::get('fail'))
<div class="alert alert-success" role="alert">
    <p style="color: white">{{$message}}</p>
</div>
@endif	

<form action="{{route('addlogin')}}" method="post">
    @csrf

    <div class="pom-agile">
        <input placeholder=" Nhập E-mail" name="email" id="email"class="user" type="email" required="">
    </div>

    <div class="pom-agile">
        <input  placeholder="Nhập mật khẩu" name="password" id="password" class="pass" type="password" required="">
        
    </div>

    <div class="pom-agile">
        <select class="form-control input-pill" name="chonlua" id="chonlua" type="text">
            <option value="admin" name="chonlua">Admin</option>
            <option value="member" name="chonlua">Thành viên</option>
    </select>
    </div>

    @if ($errors->has('email'))
<strong style="color: white" ><p style="visibility: hidden">{{$errors->first('email')}}</p>Mật khẩu hoặc Email không đúng</strong>   
@endif



    <div class="sub-w3l">
        <h6><a href="{{route('register')}}">Bạn chưa có tài khoản?</a></h6>
        <div class="right-w3l">
            <input type="submit" value="Đăng nhập">
        </div>
    </div>
</form>
        
@endsection