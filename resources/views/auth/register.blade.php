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
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Mayordomus</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Obtenga una cuenta</p>

        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                           autofocus placeholder="Nombre">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }} has-feedback">

                <div class="col-md-12">
                    <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"
                           required autofocus placeholder="Apellido">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                    @if ($errors->has('lastname'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required
                           placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                <div class="col-md-12">
                    <input id="password" type="password" class="form-control" name="password" required
                           placeholder="Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group has-feedback">
                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required placeholder="Confirmar contraseña">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" required name="terms">
                            Acepto {{Html::link('http://www.fastcode.today/terminos-y-condiciones/', 'Términos')}}
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarse</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        {{Html::link('login', 'Ya tengo una cuenta')}}
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
{{Html::script('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}
<!-- Bootstrap 3.3.6 -->
{{Html::script('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')}}
<!-- iCheck -->
{{Html::script('bower_components/AdminLTE/plugins/iCheck/icheck.min.js')}}

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
