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
                    <a href="#sign-in-div">Sign in</a>
                </li>
                <li class="page-scroll">
                    <a href="#sign-up-div">Sign up</a>
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
<section id="sign-in-div">
    <div class="container" >
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
                                if(@$_SESSION['success_signup'][0]){
                                    ?>
                                    <div class="alert alert-success">
                                        <?php
                                        foreach($_SESSION['success_signup'] as $v){
                                            echo $v.'<br>';
                                        }
                                        ?>
                                    </div>
                                <?php }
                                unset($_SESSION['success_signup']); ?>
                                <?php
                                if(@$_SESSION['error_login'][0]){
                                    ?>
                                    <div class="alert alert-warning">
                                        <?php
                                        foreach($_SESSION['error_login'] as $v){
                                            echo $v.'<br>';
                                        }
                                        ?>
                                    </div>
                                <?php }
                                unset($_SESSION['error_login']); ?>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                    </label>
                                </div>

                                <div class="col-md-6 col-md-offset-7 row page-scroll">
                                    <a href='#sign-up' class=''>Don't have an account ! ?</a><br><br>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" name='signin_submit' type="submit" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sign-up-div">
    <div class="container" >
        <div class="row vertical-offset-200">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form id='sign_up' accept-charset="UTF-8" role="form" method='post' action='functions/signup.php'>
                            <fieldset>
                                <div class="form-group">
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <input class="form-control" id='firstname' placeholder="First Name" name="firstname" type="text" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="lastname" placeholder="Last Name" name="lastname" type="text" >
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
                                if(@$_SESSION['error_signup'][0]){
                                    ?>
                                    <div class="alert alert-warning">
                                        <?php
                                        foreach($_SESSION['error_signup'] as $v){
                                            echo $v.'<br>';
                                        }
                                        ?>
                                    </div>
                                <?php }
                                unset($_SESSION['error_signup']); ?>
                                <div class="row page-scroll">
                                    <div class="col-xs-12 col-md-6"><input type="submit" value="Register" name='signup_submit' class="btn btn-primary btn-block btn-lg" tabindex="7"></div>
                                    <div class="col-xs-12 col-md-6"><a href="#sign-in-div" class="btn btn-success btn-block btn-lg">Already have an account ?</a></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>