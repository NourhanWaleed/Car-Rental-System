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

<td>
<div id="editing" class="col-md-4">
<h3>Reservation period</h3>
<form name="editing">
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
</td>
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


</div>



<script type="text/javascript">

$(document).ready(function($){
$('body').on('click', '.reserve', function () {
var carid = $(this).data('id');

    $.post('../Models/EditCar.php', {car_id: carid}, 
    function(returnedData){
        window.location.reload();
        console.log(returnedData);
});


});
});
</script>
</body>
</html>