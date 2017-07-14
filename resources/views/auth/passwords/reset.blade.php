<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mayordomus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->

{{ Html::style('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
{{ Html::style('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}
<!-- iCheck -->
{{ Html::style('bower_components/AdminLTE/plugins/iCheck/square/blue.css') }}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Mayordomus</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Ingrese su correo y su nueva contraseña</p>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Contraseña">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmar contraseña">

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-8">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Recuperar</button>
                </div>
                <!-- /.col -->
            </div>

        </form>

    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
{{Html::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}
<!-- Bootstrap 3.3.6 -->
{{Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}

</body>
</html>