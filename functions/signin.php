<?php
    @session_start();
    include_once("url.php");

    if(!isset($_SESSION['user']['logged_in']) && isset($_POST['signin_submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $valid = true;
        $_SESSION['error_login'] = array();
        if( strlen($username) < 6 ){
            $valid =  false;
            $_SESSION['error_login'][] = 'Username is too short';
        }
        if( strlen($password) < 6 ){
            $valid =  false;
            $_SESSION['error_login'][] = 'Password is too short';
        }

        if($valid) {
            $password = md5($password);
            include_once 'model.php';
            $model = new model();
            $check = $model->check_login($username, $password);
            if ($check != false) {
                $_SESSION['logged_in'] = true;
                if(isset($_POST['remember']) && $_POST['remember']==true){
                    setcookie('logged_in',true,time()+86400 * 30);
                    setcookie('user["id"]',$check,time()+86400 * 30);
                    setcookie('user["username"]',$username,time()+86400 * 30);
                }

            }else {
                $valid = false;
                $_SESSION['error_login'][] = "Username and Password don't match";
                echo "<script>window.location = "."'".$url."#sign-in-div';</script>";
            }
        }
}
echo "<script>window.location = "."'".$url."';</script>";
