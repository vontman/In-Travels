<?php
    include_once ("model.php");
    include_once ("url.php");
    $model = new model();
    $ticket = array();
    $ticket['source'] = $_POST['from_ticket'];
    $ticket['distination'] = $_POST['to_ticket'];
    $dist = abs($ticket['source'] - $ticket['distination']);
    $ticket['price'] = $dist * 20;
    $ticket['depart'] = "".$_POST['date_from_select'] . " " . $_POST['time_from_select'];
    $temp_date = date("Y-m-d H:i:s",strtotime("+".($dist)." hour",strtotime($ticket['depart'])));
    $ticket['arrival'] = $temp_date;
    if( $model->add_ticket($ticket) == false ){
        $_SESSION['error'][] = "Error Occurred !";
    }else{
        $_SESSION['success'][] = "Ticket Added Successfully !";
    }
    echo "<script>window.location = '".$url."';</script>";
