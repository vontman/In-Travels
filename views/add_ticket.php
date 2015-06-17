<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add new Ticket</h4>
            </div>
            <div class="modal-body">
                <form id='add_ticket_form' method="post" action="functions/add_ticket.php">
                    <div class="row">
                        <div class="col-lg-4">
                            <label for="sel1">From:</label>
                            <select class="form-control" id="from_ticket" name="from_ticket">
                                <?php
                                    foreach($govs as $k=>$v){
                                        echo "<option value=".$v['id']." >".$v['name']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div style="margin-top:15px;" class="row">
                        <div class="col-sm-5">
                            <label>Date : </label>
                            <input type="text" class="form-control datepicker" value="" class='datepicker' id="date_from_select" name="date_from_select">
                        </div>
                        <div class="col-sm-5"">
                            <label >Time : </label>
                            <select   id="time_from_select" class='form-control' name="time_from_select">
                                <?php
                                    for($i = 0 ; $i < 12 ; $i++){
                                        echo "<option value = '".($i*2<10?"0":"").($i*2).":00:00'>".($i*2<10?"0":"").($i*2).":00</option>";
                                    }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div style="margin-top:15px;" class="row">
                        <div class="col-lg-4">
                            <label for="sel1">To:</label>
                            <select class="form-control" id="to_ticket" name="to_ticket">
                                <?php
                                foreach($govs as $k=>$v){
                                    echo "<option value=".$v['id']." >".$v['name']."</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>


                    <div class="row">
                        <br>
                        <input type="submit" class="btn btn-primary btn-sm form-control" value="Add Ticket"/>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    var checkin = $('#date_from_select').datepicker({

        format: 'yyyy-mm-dd',
        onRender: function(date) {
            return date.valueOf() < now.valueOf() ? 'disabled' : '';
        }
    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.date.valueOf()) {
            var newDate = new Date(ev.date)
            newDate.setDate(newDate.getDate() + 1);
            checkout.setValue(newDate);
        }
        checkin.hide();
        $('#date_to_select')[0].focus();
    }).data('datepicker');

</script>
