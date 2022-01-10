<?php 
include "admin_header.php";
?>
<html>
<h2>Enter reservation and return dates (form: YYYY/MM/DD)</h2>
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="report" action="report_1_result.php" method="POST">

            <div class="form-group">
                <label>Reservation Date</label>
                <input type="text" class="form-control" name="reserve_date" />
            </div>
            
            <div class="form-group">
                <label>Return Date</label>
                <input type="text" class="form-control" name="return_date"/>
            </div>

            <button type="submit" class="btn btn-success form-button" name = "report_1">
                Report 1
            </button>
            <button type="submit" class="btn btn-success form-button" name = "report_2">
                Report 2
            </button>
            <button type="submit" class="btn btn-success form-button" name = "report_3">
                Report 3
            </button>
            <button type="submit" class="btn btn-success form-button" name = "status">
                Car Status
            </button>
        </form>
    </div>
</body>
</html>