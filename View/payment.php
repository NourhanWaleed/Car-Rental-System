<?php 
session_start();
$customer_id = $_SESSION['customer_id'];
include "header.php";
?>
<div class="container mt-2">
<div class="page-header">
<h2>Pending Payments</h2>
</div>
<div class="row">
<div class="col-md-8">
<table class="table">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Reservation Date</th>
<th scope="col">Return Date</th>
<th scope="col">Amount Paid</th>
<th scope="col">Amount Remaining</th>
<th scope="col">Total</th>


</tr>
</thead>
<tbody>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

$query="SELECT * FROM reservation JOIN payment ON payment.payment_id = reservation.payment_id WHERE customer_id=".$customer_id." AND amount_remaining != 0"; 
$result=mysqli_query($conn,$query);
?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_assoc($result)): ?>
<tr>
<th scope="row"><?php echo $array['reservation_number'];?></th>
<td><?php echo $array['reserve_date'];?></td>
<td><?php echo $array['return_date'];?></td>
<td><?php echo $array['amount_paid'];?></td>
<td><?php echo $array['amount_remaining'];?></td>
<td><?php echo $array['total_amount'];?></td>

<td> 
<a class="btn btn-primary pay" data-id=<?php echo $array['reservation_number'];?>>Pay</a>
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result);?>
</tbody>
</table>
<?php 
$query="SELECT balance FROM customer WHERE customer_id=".$customer_id." "; 
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0){
    while($array=mysqli_fetch_assoc($result)){
        $balance = $array['balance'];
    }
}
mysqli_close($conn);
?>
<div id="confirmation" class="col-md-4">
    <p>Your balance: <?php $balance ?></p>
    <form name="confirmForm">
    <div class="form-group">
    <label for="amount_paid">Pay amount</label>
    <input type="text" class="form-control" id="amount_paid" name="amount_paid" required/>
    </div>
    </form>
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
});
}

});
});
</script>
</body>
</html>


