<style>
    .myFont{
        font-size: 16px;
        font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
</style>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ticket</h4>
            </div>
            <div class="modal-body myFont" id="viewed_ticket">
                <h3>Owner : <?php echo $_SESSION['user'][4]. " " . $_SESSION['user'][5];  ?></h3>
                <h3 lol="1"> </h3>
                <h3 lol="2">To : </h3>
                <h3 lol="3">Depart : </h3>
                <h3 lol="4">Arrival : </h3>
                <h3 lol="5">Price : </h3>

            </div>
            <div style="margin-top: 25px;" class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>