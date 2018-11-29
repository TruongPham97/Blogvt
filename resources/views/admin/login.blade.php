<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin - Start Bootstrap Template</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('public/Admin')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/Admin')}}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{asset('public/Admin')}}/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                </div>
            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}

                </div>
                @endif
            <form action="login" method="POST" role="form">
                <legend>Login</legend>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="">PassWord</label>
                    <input type="password" class="form-control" id="pass" placeholder="PassWord" name="pass">
                </div>
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="register.html">Register an Account</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{asset('public/Admin')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('public/Admin')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="{{asset('public/Admin')}}/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
