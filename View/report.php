<?php 
include "admin_header.php";
?>
<html>
<h2>Reports and Car Status</h2>
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="report" action="status_result.php" method="POST">

            <h5>Enter reservation date and return date (form: YYYY-MM-DD)</h5>

            <div class="form-group">
                <label>Reservation Date</label>
                <input type="text" class="form-control" name="reserve_date" />
            </div>
            
            <div class="form-group">
                <label>Return Date</label>
                <input type="text" class="form-control" name="return_date"/>
            </div>

            <button type="submit" class="btn btn-success form-button" name = "status">
                Car Status
            </button>
        </form>
    </div>

    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="report" action="report_1_result.php" method="POST">

            <h5>Enter reservation date and return date (form: YYYY-MM-DD)</h5>

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
        </form>
    </div>

    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="report" action="report_2_result.php" method="POST">

            <h5>Enter reservation date and return date (form: YYYY-MM-DD)</h5>

            <div class="form-group">
                <label>Reservation Date</label>
                <input type="text" class="form-control" name="reserve_date" />
            </div>
            
            <div class="form-group">
                <label>Return Date</label>
                <input type="text" class="form-control" name="return_date"/>
            </div>

            <button type="submit" class="btn btn-success form-button" name = "report_2">
                Report 2
            </button>
        </form>
    </div>

    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="report" action="report_3_result.php" method="POST">

            <h5>Enter customer ID and reservation date and return date (form: YYYY-MM-DD)</h5>

            <div class="form-group">
                <label>Customer ID</label>
                <input type="text" class="form-control" name="customer_id" />
            </div>

            <div class="form-group">
                <label>Reservation Date</label>
                <input type="text" class="form-control" name="reserve_date" />
            </div>
            
            <div class="form-group">
                <label>Return Date</label>
                <input type="text" class="form-control" name="return_date"/>
            </div>

            <button type="submit" class="btn btn-success form-button" name = "report_3">
                Report 3
            </button>
        </form>
    </div>
</body>
</html>