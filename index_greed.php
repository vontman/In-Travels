<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>In-Travel</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/in-train.css" rel="stylesheet">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classies.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/in-train.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            background: url(http://mymaplist.com/img/parallax/back.png);
            background-color: #444;
            background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);
        }

        .vertical-offset-100{
            padding-top:100px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $(document).mousemove(function(e){
                TweenLite.to($('body'),
                    .5,
                    { css:
                    {
                        backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
                    }
                    });
            });
            jQuery.validator.setDefaults({
                debug: true,
                success: "valid"
            });
            $('#sign_in').validate({
                rules:{
                    password:
                    {
                        required:true,
                        minlength:6,
                        maxlength:30
                    },
                    username:{
                        required:true,
                        minlength:6,
                        maxlength:20

                    }
                },

                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');

                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorElement: 'span',
                errorClass: 'help-block',
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }

            });
            $('#sign_up').validate({
                rules:{
                    email:
                    {

                        required:true,
                        email:true
                    },
                    username:
                    {
                        required:true,
                        minlength:6,
                        maxlength:20
                    },
                    password:
                    {
                        required:true,
                        minlength:6,
                        maxlength:30
                    },
                    repassword:{
                        equalTo:"#password"

                    }
                },

                highlight: function(element) {
                    $(element).closest('.form-group').addClass('has-error');

                },
                unhighlight: function(element) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorElement: 'span',
                errorClass: 'help-block',
                errorPlacement: function(error, element) {
                    if(element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else {
                        error.insertAfter(element);
                    }
                }

            });
        });
    </script>
</head>

<body id="page-top" class="index">
<?php
@session_start();
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Trains</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#sign_in">Sign in</a>
                </li>
                <li class="page-scroll">
                    <a href="#sign_up">Sign up</a>
                </li>
                <li class="page-scroll">
                    <a href="#about_team">Team</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img id='little-bg' class="img-responsive" src="img/little-train.png" alt="">
                <div class="intro-text">
                    <span class="name">In-Travel</span>
                    <hr class="star-light">
                    <span class="skills">Your Guide to Travel</span>
                </div>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="container" id="sign-in">
        <div class="row vertical-offset-200">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form id="sign_in" accept-charset="UTF-8" role="form" method='post' action='functions/signin.php'>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" required='required'>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required='required'>
                                </div>
                                <?php
                                if(@$_SESSION['signin_error'][0]){
                                    ?>
                                    <div class="alert alert-warning">
                                        <?php
                                        foreach($_SESSION['signin_error'] as $v){
                                            echo $v.'<br>';
                                        }
                                        ?>
                                    </div>
                                <?php }
                                unset($_SESSION['signin_error']); ?>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                    </label>
                                </div>

                                <div class="col-md-6 col-md-offset-7 row page-scroll">
                                    <a href='#sign_up' class=''>Don't have an account ! ?</a><br><br>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container" id="sign-up">
        <div class="row vertical-offset-200">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form id='sign_up' data-toggle="validator" accept-charset="UTF-8" role="form" method='post' action='functions/signup.php'>
                            <fieldset>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="First Name" name="firstname" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Last Name" name="lastname" type="text" >
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id='username' placeholder="Username" name="username" type="text" required='required'>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id='email' placeholder="E-Mail" name="email" type="email" required='required'>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id='password' placeholder="Password" name="password" type="password" value="" required='required'>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id='repassword' placeholder="Confirm Password" name="repassword" type="password" value="" required='required'>
                                </div>

                                <?php
                                if(@$_SESSION['signup_error'][0]){
                                    ?>
                                    <div class="alert alert-warning">
                                        <?php
                                        foreach($_SESSION['signup_error'] as $v){
                                            echo $v.'<br>';
                                        }
                                        ?>
                                    </div>
                                <?php }
                                unset($_SESSION['signup_error']); ?>
                                <div class="row page-scroll">
                                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                    <div class="col-xs-12 col-md-6"><a href="#sign_in" class="btn btn-success btn-block btn-lg">Sign In</a></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center" id='about_team'>
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-3">
                </div>
                <div class="footer-col col-md-6">
                    <h3 class='alert-danger'>Team</h3>
                    <ul class="list-inline">
                        <li>
                            <h4>Sherif Hassan Wally</h4>
                        </li>
                        <li>
                            <h4>Omar Mohamed Abdel Baset</h4>
                        </li>
                        <li>
                            <h4>Mohamed Ahmed Aboul Fotoh</h4>
                        </li>
                        <li>
                            <h4>Mohamed Fathy Abdel Fattah</h4>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-3">
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


</body>

</html>
