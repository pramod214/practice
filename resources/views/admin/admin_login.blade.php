<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('public/adminpanel/style.css')}}">
</head>
<body>
<form method="post" action="{{route('admin.login')}}">
    @csrf
<div class="login-box">
    <h1>Welcome</h1>
    <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Email">
    </div>

    <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password">
    </div>

    <input type="submit" class="btn" value="Sign in" >
    @if(Session::has('flash_message_error'))
        <div class="alert alert-danger alert-block">
            {{--<button type="button" class="close" data-dismiss="alert"></button>--}}
            <strong style="color:red">{!! session('flash_message_error') !!}</strong>
        </div>
    @endif

    @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            {{--<button type="button" class="close" data-dismiss="alert"></button>--}}
            <strong style="color:green">{!! session('flash_message_success') !!}</strong>
        </div>
    @endif
</div>
</form>
</body>
</html>
