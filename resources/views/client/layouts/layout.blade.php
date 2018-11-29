<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('public/Client')}}/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- header -->
<a href="{{route('/')}}"><img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Logo_TV_2015.png" alt="" style="margin-left: 610px;
    height: 100px;
    padding-top: 25px;">
    <div class="container"> </a>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">TRANG CHỦ</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Tin Tức <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Tin Nóng</a></li>
                <li><a href="#">Tin trong ngày</a></li>
                <li><a href="#">Tin showbiz</a></li>
            </ul>
        </li>
        <li><a href="{{route('category')}}">Thể thao</a></li>
        <li><a href="#">Du lịch</a></li>
        <li><a href="#">Foody</a></li>
        <li><a href="#">Giải trí</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{'login'}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
</nav>
</div>
<hr style="margin-top: -10px;
    margin-bottom: -15px;
    border-top: 3px solid #eee;">
<!-- hết header -->

<!-- Content -->
@yield('main');

<!-- footer -->
<div class="container">
    <div class="text-center center-block">
        <p class="txt-railway"></p>
        <br />
        <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
        <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
        <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
        <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</body>
</html>