<?php
    include_once("functions/model.php");
    $model = new model();
    $tickets = $model->view_tickets();
