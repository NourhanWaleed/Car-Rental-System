<?php
include "admin_header.php"
?>

<div class="container mt-2">
<div class="page-header">
<h2>Cars List</h2>
</div>
<div class="row">
<div class="col-md-8">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Plate Number</th>
<th scope="col">Model</th>
<th scope="col">Brand</th>
<th scope="col">Year</th>
<th scope="col">Color</th>
<th scope="col">Price per day</th>
<th scope="col">Office ID</th>
<th scope="col">Status</th>
<th scope="col">Reserved</th>

</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

$query="SELECT * FROM Car "; 
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_assoc($result)): ?>
<tr>
<th scope="row"><?php echo $array['car_id'];?></th>
<td><?php echo $array['plate_number'];?></td>
<td><?php echo $array['model'];?></td>
<td><?php echo $array['brand'];?></td>
<td><?php echo $array['year'];?></td>
<td><?php echo $array['color'];?></td>
<td><?php echo $array['price_per_day'];?></td>
<td><?php echo $array['office_id'];?></td>
<td><?php echo $array['status'];?></td>
<td><?php echo $array['is_reserved'];?></td>



<td> 
<a class="btn btn-primary edit" data-id=<?php echo $array['car_id'];?>>Edit</a> </td>
<td> 
<a class="btn btn-primary delete" data-id=<?php echo $array['car_id'];?>>Delete</a> </td>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result);  mysqli_close($conn);?>
</tbody>
</table>

<div id="editing" class="col-md-4">
<h3>Reservation period</h3>
<form name="editing">
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

</form>
</div> 
</div>



<script type="text/javascript">

$(document).ready(function($){
$('body').on('click', '.edit', function () {
var carid = $(this).data('id');
var new_carid = document.forms["editing"]["car_id"].value;
var new_plate_number = document.forms["editing"]["plate_number"].value;
var new_model = document.forms["editing"]["model"].value;
var new_brand = document.forms["editing"]["brand"].value;
var new_year = document.forms["editing"]["year"].value;
var new_color = document.forms["editing"]["color"].value;
var new_priceperday = document.forms["editing"]["price_per_day"].value;
var new_office_id = document.forms["editing"]["office_id"].value;
var new_status = document.forms["editing"]["status"].value;
var new_is_reserved = document.forms["editing"]["is_reserved"].value;

$.post('../Models/EditCar.php', {car_id: carid, new_carid: new_carid, new_plate_number: new_plate_number, new_model: new_model, new_brand:new_brand,
new_year:new_year, new_color:new_color, new_priceperday:new_priceperday, new_office_id:new_office_id, new_status:new_status, new_is_reserved:new_is_reserved}, 
    function(returnedData){
        window.location.reload();
        console.log(returnedData);
});


});
$('body').on('click', '.delete', function () {
var carid = $(this).data('id');


$.post('../Models/DeleteCar.php', {car_id: carid}, 
    function(returnedData){
        window.location.reload();
        console.log(returnedData);
});


});
});
</script>
</body>
</html>