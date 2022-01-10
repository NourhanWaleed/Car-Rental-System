<?php 
session_start();
$result = $_SESSION['report_res']; 
include "..\Models\ReportModel.php";
include "admin_header.php";
?>

<div class="container mt-2">
<div class="page-header">
<h2>Report 3 Result</h2>
</div>
<div class="row">
<div class="col-md-8">
<table class="table">
<thead>
<tr>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">Gender</th>
<th scope="col">Date of Birth</th>
<th scope="col">Email</th>
<th scope="col">Balance</th>
<th scope="col">Plate Number</th>
<th scope="col">Model</th>
<th scope="col">Brand</th>
<th scope="col">Amount Paid</th>
<th scope="col">Amount Remaining</th>

</tr>
</thead>
<tbody>

<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_assoc($result)): ?>
<tr>
<th scope="row"><?php echo $array['first_name'];?></th>
<td><?php echo $array['last_name'];?></td>
<td><?php echo $array['gender'];?></td>
<td><?php echo $array['date_of_birth'];?></td>
<td><?php echo $array['email'];?></td>
<td><?php echo $array['balance'];?></td>
<td><?php echo $array['plate_number'];?></td>
<td><?php echo $array['model'];?></td>
<td><?php echo $array['brand'];?></td>
<td><?php echo $array['amount_paid'];?></td>
<td><?php echo $array['amount_remaining'];?></td>

<td> 
</tr>
<?php endwhile; ?>
<?php else: ?>
<tr>
<td colspan="3" rowspan="1" headers="">No Data Found</td>
</tr>
<?php endif; ?>
<?php mysqli_free_result($result); mysqli_close($conn);
?>
</tbody>
</table>


</body>
</html>