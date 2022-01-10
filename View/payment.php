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
<td><?php echo $array['amount_paid'];?></td>
<td><?php echo $array['amount_remaining'];?></td>
<td><?php echo $array['total_amount'];?></td>

<td> 
<a class="btn btn-primary pay" data-id=<?php echo $array['payment_id'];?>>Pay</a>
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
$query="SELECT balance FROM customer WHERE customer_id=".$customer_id; 
$result=mysqli_query($conn,$query);
if ($result->num_rows > 0){
    while($array=mysqli_fetch_assoc($result)){
        $balance = $array['balance'];
    }
}
mysqli_close($conn);
?>
<div id="confirmation" class="col-md-4">
    <p>Your balance: <span id = "balance"><?php echo $balance ?></span></p>
    <form name="confirmForm">
    <div class="form-group">
    <label for="amount_paid">Pay amount</label>
    <input type="text" class="form-control" id="amount_paid" name="amount_paid" required/>
    </div>
    </form>
</div>

<script type="text/javascript">

$(document).ready(function($){
$('body').on('click', '.pay', function () {
var amount_paid = document.forms["confirmForm"]["amount_paid"].value;
var balance = document.getElementById('balance').innerHTML;
var payment_id = $(this).data('id');
if (amount_paid == "") {
    alert("Please enter amount to be paid!");
} else if (balance < parseFloat(amount_paid)) {
    alert("Payment exceeds balance!");
} else {
    amount_paid =  parseFloat(amount_paid);
    $.post('../Models/ConfirmPayment.php', {payment_id: payment_id, amount_paid: amount_paid}, 
    function(returnedData){
        alert("Payment Success!");
        window.location.reload();
        console.log(returnedData);
});
}

});
});
</script>
</body>
</html>


