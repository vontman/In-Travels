<?php
    $id = $_GET['ticket_id'];
    include_once ("../functions/url.php");
    include_once ('../functions/model.php');
    $model = new model();
    if( $model->delete_ticket($id) ){
        $_SESSION['success'][] = "Ticket Deleted Successfully !";
    }else{
        $_SESSION['error'][] = "Error Occurred !";
    }

echo "<script>window.location = "."'".$url."';</script>";