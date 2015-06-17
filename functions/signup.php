<?php
include_once ("url.php");
@session_start();
if(@$_POST['signup_submit']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $valid = true;
    $_SESSION['error_signup'] = array();
    if( strlen($username) < 6 ){
        $valid =  false;
        $_SESSION['error_signup'][] = 'Username is too short';
    }
    if( strlen($password) < 6 ){
        $valid =  false;
        $_SESSION['error_signup'][] = 'Password is too short';
    }
    if($valid) {
        $password = md5($password);
        include_once 'model.php';
        $model = new model();
        $temp = array();
        $temp['username'] = $username;
        $temp['password'] = $password;
        $temp['email'] = $_POST['email'];
        $temp['first_name'] = $_POST['firstname'];
        $temp['last_name'] = $_POST['lastname'];
        $check = $model->signup($temp);
        if ($check) {
            $_SESSION['success_signup'][] = 'Account has been created !';
            echo "<script>window.location = "."'".$url."#sign-in-div';</script>";
        }else {
            $valid = false;
            echo "<script>window.location = "."'".$url."#sign-up-div';</script>";
        }
    }
    echo "<script>window.location = "."'".$url."#sign-in-div';</script>";
}