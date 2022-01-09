<?php

session_start();
$customer_id = $_SESSION['customer_id'];

include "header.php";
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
<th scope="col">Model</th>
<th scope="col">Brand</th>
<th scope="col">Year</th>
<th scope="col">Color</th>
<th scope="col">Price per day</th>
<th scope="col">Location</th>
</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

$query="SELECT * FROM Car JOIN Office ON Car.office_id = Office.office_id WHERE status = 'active' AND is_reserved = 'N'"; 
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_assoc($result)): ?>
<tr>
<th scope="row"><?php echo $array['model'];?></th>
<td><?php echo $array['brand'];?></td>
<td><?php echo $array['year'];?></td>
<td><?php echo $array['color'];?></td>
<td><?php echo $array['price_per_day'];?></td>
<td><?php echo $array['street'].', '.$array['CITY'].', '.$array['Country'];?></td>

<td> 
<a class="btn btn-primary reserve" data-id=<?php echo $array['car_id'];?>>Reserve</a>
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

<div id="confirmation" class="col-md-4">
<h3>Reservation period</h3>
<form name="confirmForm">
    <div class="form-group">
    <label for="reserve-date">Reservation date</label>
    <input type="date" class="form-control" id="reserve-date" name="reserve-date" required/>
    </div>
    <div class="form-group">
    <label for="return-date">Return date</label>
    <input type="date" class="form-control" id="return-date" name="return-date" required/>
    </div>

</form>
</div> 
       
</div>



<script type="text/javascript">

$(document).ready(function($){
$('body').on('click', '.reserve', function () {
var reserve_date = document.forms["confirmForm"]["reserve-date"].value;
var return_date = document.forms["confirmForm"]["return-date"].value;
var carid = $(this).data('id');
if (reserve_date == "" || return_date == "") {
    alert("Please enter reservation period!");

} else if (new Date(reserve_date) > new Date(return_date)) {
    alert("Return date cannot be before reserve date");
} else {
    $.post('../Models/ReserveCar.php', {car_id: carid, reserve_date: reserve_date, return_date: return_date}, 
    function(returnedData){
        alert("Reservation success!");
        window.location.reload();
});
}

});
});
</script>
</body>
</html>