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
$conn = mysqli_connect('localhost', 'root', 'root', 'car_rental_system');

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
<?php mysqli_free_result($result); ?>
</tbody>
</table>

<!-- <div class="col-md-4">
<span id="fname"></span><br>
<span id="lname"></span><br>
<span id="email"></span><br>
</div> -->
       
</div>

<!-- <script>
    function send_id(car_id) {
    }
</script> -->

<script type="text/javascript">
$(document).ready(function($){
$('body').on('click', '.reserve', function () {

var carid = $(this).data('id');
$.post('../Models/ReserveCar.php', {customer_id: <?php $customer_id ?>, car_id: carid}, 
    function(returnedData){
         console.log(returnedData);
});
// $.ajax({
// type:"GET",
// url: "payment.php",
// data: {car_id: carid},
// dataType: "html",
// success: function(res){
    
//     alert('success');
// },
// error: function(res){
//     alert('fail.');
// }
// });
//window.location.href = 'payment.php';
});
});
</script>
</body>
</html>