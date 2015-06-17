<?php
@session_start();
unset($_SESSION);
unset($_COOKIE);
@session_destroy();
include_once('url.php');
echo "<script>window.location = "."'".$url."';</script>";
