<?php 
include "header.php";
?>
<html>
    <h2>Search for a car</h2>
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="search" action="search_result.php" method="POST">

            <div class="form-group">
                <label>Car ID</label>
                <input type="text" class="form-control" name="car_id" />
            </div>
            
            <div class="form-group">
                <label>Plate Number</label>
                <input type="text" class="form-control" name="plate_number"/>
            </div>

            <div class="form-group">
                <label>Model</label>
                <input type="text" class="form-control" name="model"/>
            </div>

            <div class="form-group">
                <label>brand</label>
                <input type="text" class="form-control" name="brand"/>
            </div>

            <div class="form-group">
                <label>year</label>
                <input type="text" class="form-control" name="year"/>
            </div>

            <p>Status</p>
                <input type="radio" class="form-check-input" id="in" name="status" value="active"  />
                <label class="form-check-label" for="male">Active</label><br>
                <input type="radio" class="form-check-input" id="out" name="status" value="out of service" />
                <label class="form-check-label" for="female">Out of Service</label><br>

            <div class="form-group">
                <label>price per day</label>
                <input type="text" class="form-control" name="price_per_day"/>
            </div>
            
            <div class="form-group">
                <label>Office_ID</label>
                <input type="text" class="form-control" name="office_id"/>
            </div>
            
            <div class="form-group">
                <label>Color</label>
                <input type="text" class="form-control" name="color"/>
            </div>
            <p>Reserved</p>
                <input type="radio" class="form-check-input" id="in" name="is_reserved" value="Y" />
                <label class="form-check-label" for="male">Yes</label><br>
                <input type="radio" class="form-check-input" id="out" name="is_reserved" value="N" />
                <label class="form-check-label" for="female">No</label><br>



            <button type="submit" class="btn btn-success form-button" name = "search">
                Search
            </button>
        </form>
    </div>
</body>
</html>