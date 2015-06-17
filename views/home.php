
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
                        <a href="#tickets">Tickets</a>
                    </li>
                    <li class="page-scroll">
                        <a href="functions/signout.php">Sign out</a>
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


	<section>
		<div class='container' id="tickets">
			<div class="panel panel-default">
			  <!-- Default panel contents -->


                <?php
                    include_once("functions/govs.php");
                    include_once('views/add_ticket.php');
                    include_once('views/view_ticket.php');
                ?>
                <legend class="panel-heading">Tickets</legend>


                <?php
                if(@count($_SESSION['success']) > 0){
                    ?>
                    <div class="alert alert-success">
                        <?php
                        foreach($_SESSION['success'] as $v){
                            echo $v.'<br>';
                        }
                        ?>
                    </div>
                <?php }
                unset($_SESSION['success']); ?>
                <?php
                if(@count($_SESSION['error']) > 0){
                    ?>
                    <div class="alert alert-warning">
                        <?php
                        foreach($_SESSION['error'] as $v){
                            echo $v.'<br>';
                        }
                        ?>
                    </div>
                <?php }
                unset($_SESSION['error']); ?>



                <!-- Table -->
			  <table class="table">
				  <thead>
					<th>#</th>
					<th>From</th>
					<th>To</th>
					<th>Source</th>
                    <th>Destination</th>
                    <th>Price</th>
                    <th style="text-align: center;">~(^_^)~</th>
				  </thead>
                  <tbody>
                  <?php
                        include_once("functions/view_tickets.php");
                        include_once("functions/url.php");
                        $i=1;
                        foreach($tickets as $k=>$v){
                            echo "<tr>
                                <td>$i</td>
                                <td rel=1>".$v['depart']."</td>
                                <td rel=2>".$v['arrival']."</td>
                                <td rel=3>".$govs[$v['source']-1]['name']."</td>
                                <td rel=4>".$govs[$v['distination']-1]['name']."</td>
                                <td rel=5>".$v['price']."</td>
                                <td>".'
                                <div style="max-width:120px; margin:auto;height:32px;position:relative;">
                                    <button style="float:left;" type="button" class="btn btn-primary btn-sm viewer" data-toggle="modal" data-target="#myModal2">
                                        View
                                    </button>
                                    <a style="float:right;" class="btn btn-danger btn-sm " href="delete_ticket/?ticket_id='.$v['id'].'">
                                        Delete
                                    </a>
                                </div>'
                                ."</td>
                            </tr>";
                            $i++;
                        }
                    ?>
                  </tbody>
			  </table>
                <button style="float:right;" type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">
                    Add New Ticket
                </button>
			</div>
		</div>
	</section>


