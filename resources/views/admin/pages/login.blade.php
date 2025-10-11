<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset("adminAsset/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{asset("adminAsset/css/metisMenu.min.css")}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset("adminAsset/css/sb-admin-2.css")}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset("adminAsset/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="/admin/dangnhap">
                             @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Tai-khoan" name="taikhoan" type="text" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mat-khau" name="matkhau" type="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="remember me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                                <button type="submit">Đăng nhập</button>
                                @if (session('error'))
                                    <h2>{{session('error')}}</h2>
                                @endif
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset("adminAsset/js/jquery.min.js")}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset("adminAsset/js/bootstrap.min.js")}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{asset("adminAsset/js/metisMenu.min.js")}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset("adminAsset/js/sb-admin-2.js")}}"></script>

</body>

</html>
