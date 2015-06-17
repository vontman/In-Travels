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
    <link href="css/bootstrap.min_red.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/in-train_red.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet" type="text/css">


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/classies.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

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
			background: url(img/back.png);
			background-color: #444;
			background: url(img/pinlayer2.png),url(img/pinlayer1.png),url(img/back.png);
		}

		.vertical-offset-100{
			padding-top:100px;
		}
	</style>
</head>

<body id="page-top" class="index">
	<?php
		@session_start();
        if(isset($_COOKIE['logged_in']) && $_COOKIE['logged_in']){
            $_SESSION['user']['id'] = $_COOKIE['user']['id'];
            $_SESSION['user']['username'] = $_COOKIE['user']['username'];
            $_SESSION['logged_in'] = true;
        }
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            include_once 'views/home.php';
        }else{
            include_once 'views/login.php';
        }
	?>

   
    <?php
        include_once 'views/footer.php';
    ?>
</body>

</html>
