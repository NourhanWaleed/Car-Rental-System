<?php 
include "admin_header.php";
?>
<html>
    <h2>Add a car</h2>
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="add-car" action="../Models/AddCar.php" method="POST">
            
            <div class="form-group">
                <label>Plate Number</label>
                <input type="text" class="form-control" name="plate_number" required/>
            </div>

            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" name="model" required/>
            </div>

            <div class="form-group">
                <label>brand</label>
                <input type="text" class="form-control" name="brand" required/>
            </div>

            <div class="form-group">
                <label>year</label>
                <input type="text" class="form-control" name="year" required/>
            </div>


            <div class="form-group">
                <label>price per day</label>
                <input type="text" class="form-control" name="price_per_day" required/>
            </div>
            
            <div class="form-group">
                <label>Office_ID</label>
                <input type="text" class="form-control" name="office_id" required/>
            </div>
            
            <div class="form-group">
                <label>Color</label>
                <input type="text" class="form-control" name="color" required/>
            </div>




            <button type="submit" class="btn btn-success form-button" name = "add-car">
                Add
            </button>
        </form>
    </div>
</body>
</html>