@extends('layout')
@section('content')
    <!--Main-->
    <div class="login-form">
        <div class="height360">
            <div class="main">

                @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif

                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif

                <form action="{{ route('password.email') }}" method="POST" class="form" id="form-2">
                    @csrf
                    <h3 class="heading">Quên mật khẩu</h3>

                    <div class="form-group">
                        <label for="email" class="form-label">Nhập email của bạn</label>
                        <input type="email" name="email" class="form-control" required>
                        <span class="form-message"></span>
                    </div>

                    <button type="submit" class="form-submit" name="submit">Gửi yêu cầu</button>

                    <div class="dont-have-account">
                        Bạn đã nhớ mật khẩu? <a class="account-register" href="{{ URL::to('login')}}">Đăng nhập ngay</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
