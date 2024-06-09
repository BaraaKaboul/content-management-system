<!--
 * CoreUI - Open Source Bootstrap Admin Template
 * @version v1.0.0-alpha.2
 * @link http://coreui.io
 * Copyright (c) 2016 creativeLabs Łukasz Holeczek
 * @license MIT
 -->
<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="CoreUI Bootstrap 4 Admin Template">
    <meta name="author" content="Lukasz Holeczek">
    <meta name="keyword" content="CoreUI Bootstrap 4 Admin Template">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->
    <title>CoreUI Bootstrap 4 Admin Template</title>
    <!-- Icons -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/simple-line-icons.css')}}" rel="stylesheet">
    <!-- Main styles for this application -->
    <link href="{{asset('dest/style.css')}}" rel="stylesheet">
</head>

<body class="">
<div class="container">
    <div class="row">
        <div class="col-md-5 m-x-auto pull-xs-none vamiddle">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="card">
                    <div class="card-block p-a-2">
                        <h1>عضویت</h1>
                        <p class="text-muted">حساب کاربری خود را بسازید!</p>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control en" placeholder="نام کاربری">
                        </div>
                        <div class="input-group m-b-1">
                            <span class="input-group-addon">@</span>
                            <input type="email" name="email" class="form-control en" placeholder="ایمیل">
                        </div>
                        <div class="input-group m-b-1">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" name="password" class="form-control en" placeholder="رمز ورود">
                        </div>
                        <div class="input-group m-b-2">
                            <span class="input-group-addon"><i class="icon-lock"></i>
                            </span>
                            <input type="password" name="password_confirmation" class="form-control en" placeholder="تکرار رمز ورود">
                        </div>
                        <button type="submit" class="btn btn-block btn-success">
                            <i class="icon-user-follow"></i>
                            نام نویسی
                        </button>
                    </div>
                    <div class="card-footer p-a-2">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-block btn-facebook" type="button">
                                    <span>ورود با فیسبوک</span>
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-block btn-twitter" type="button">
                                    <span>ورود با گیتهاب</span>
                                </button>
                            </div>
                        </div>
                        <hr class="transparent">
                        <div class="row">
                            <div class="col-xs-6">
                                <button class="btn btn-block btn-github" type="button">
                                    <span>ورود با گیت هاب</span>
                                </button>
                            </div>
                            <div class="col-xs-6">
                                <button class="btn btn-block btn-google-plus" type="button">
                                    <span>ورود با گوگل پلاس</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Bootstrap and necessary plugins -->
<script src="{{asset('js/libs/jquery.min.js')}}"></script>
<script src="{{asset('js/libs/tether.min.js')}}"></script>
<script src="{{asset('js/libs/bootstrap.min.js')}}"></script>
<script>
    function verticalAlignMiddle() {
        var bodyHeight = $(window).height();
        var formHeight = $('.vamiddle').height();
        var marginTop = (bodyHeight / 2) - (formHeight / 2);
        if (marginTop > 0) {
            $('.vamiddle').css('margin-top', marginTop);
        }
    }

    $(document).ready(function () {
        verticalAlignMiddle();
    });
    $(window).bind('resize', verticalAlignMiddle);
</script>
<!-- Grunt watch plugin -->
<script src="//localhost:35729/livereload.js"></script>
</body>

</html>
