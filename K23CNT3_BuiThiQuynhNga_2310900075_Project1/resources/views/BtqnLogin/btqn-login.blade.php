@extends('BtqnLogin')
@section('Title','Login')
@section('content-body')
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name"></h1>
            </div>
            <h3 class="font-bold">Welcome</h3>
            <p>
                <small>STUDIO</small>
            </p>
            <div class="ibox-content"> 
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <form class="m-t" role="form" action="">
                <div class="form-group">
                    <input type="btqnEmail" name="btqnEmail" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="btqnPassword" name="btqnPassword" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                <a href="#">
                    <small>Quên mật khẩu</small>
                </a>
                <p class="text-muted text-center">
                    <small> Chưa có tài khoản</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{{route('admins.btqnLogin')}}">Tạo tài khoăn mới.</a>
            </form>
        </div>
    </div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
@endsection