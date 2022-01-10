<?php 
include "admin_header.php";
?>
<html>
    <h2>Advanced</h2>
    <div class="col-sm-6 col-sm-offset-3 form-box">

        <form name="search" action="advanced_search_result.php" method="POST">
            <h2>Car Specs</h2>

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

                <h2>Customer Information</h2>
                <div class="form-group">
                <label>Customer ID</label>
                <input type="text" class="form-control" name="cust_id" />
            </div>

                <div id="firstname-group" class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" />
            </div>

            <div id="lastname-group" class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" />
            </div>


            <div id="gender-group" class="form-check">
                <p>Gender</p>
                <input type="radio" class="form-check-input" id="male" name="gender" value="M"/>
                <label class="form-check-label" for="male">Male</label><br>
                <input type="radio" class="form-check-input" id="female" name="gender" value="F" />
                <label class="form-check-label" for="female">Female</label><br>
            </div>

            <div id="dateofbirth-group" class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" />
            </div>


              <div id="email-group" class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="email@example.com" />
            </div>


            <div id="balance-group" class="form-group">
                <label for="balance">Balance</label>
                <input type="text" class="form-control" id="balance" name="balance" placeholder="Balance" />
            </div>

            <h2>Reservation</h2>
            <div  class="form-group">
                <label >Reservation ID</label>
                <input type="text" class="form-control" id="reservation_id" name="reservation_id" placeholder="reservation ID" />
            </div>
            <div  class="form-group">
                <label>Reservation Date</label>
                <input type="date" class="form-control" id="reservation_date" name="reservation_date" />
            </div>
            <div  class="form-group">
                <label>Return Date</label>
                <input type="date" class="form-control" id="return_date" name="return_date" />
            </div>
            <div  class="form-group">
                <label >Payment ID</label>
                <input type="text" class="form-control" id="payment_id" name="payment_id" placeholder="Payment ID" />
            </div>

            <button type="submit" class="btn btn-success form-button" name = "search">
                Search
            </button>
        </form>
    </div>
</body>
</html>