<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Al Kindi Isda Admin Dashboard Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/metro.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/style_responsive.css" rel="stylesheet" />
    <link href="../assets/css/style_default.css" rel="stylesheet" id="style_color" />
    <link rel="stylesheet" type="text/css" href="../assets/uniform/css/uniform.default.css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    <img src="../assets/img/logo-big.png" alt="" />
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN REGISTRATION FORM -->
    <form class="form-vertical register-form" method="POST" action="{{ url('/auth/register') }}">
        {!! csrf_field() !!}
        <h3 class="">Sign Up</h3>
        <p>Enter your account details below:</p>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" value="{{ old('name') }}" placeholder="Username" name="name"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Full Name</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" value="{{ old('fullname') }}" placeholder="Fullname" name="fullname"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-ok"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="password_confirmation"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-envelope"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Email" value="{{ old('email') }}" name="email"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <label class="checkbox">
                    <input type="checkbox" name="tnc"/> I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                </label>
                <div id="register_tnc_error"></div>
            </div>
        </div>
        <div class="form-actions">

            <button type="submit" id="register-submit-btn" class="btn green pull-right">
                Sign Up <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END REGISTRATION FORM -->
</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright">
    2013 &copy; Al Kindi Isda. Admin Dashboard Template.
</div>
<!-- END COPYRIGHT -->
<!-- BEGIN JAVASCRIPTS -->
<script src="../assets/js/jquery-1.8.3.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/uniform/jquery.uniform.min.js"></script>
<script src="../assets/js/jquery.blockui.js"></script>
<script type="text/javascript" src="../assets/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="../assets/js/app.js"></script>
<script>
    jQuery(document).ready(function() {
        App.initLogin();
    });
    jQuery('.register-form').show();
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>