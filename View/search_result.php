<?php 
session_start();
$result = $_SESSION['search_res']; 
include "..\Models\CustomerSearch.php";
include "header.php";
?>
<div class="container mt-2">
<div class="page-header">
<h2>Search Result</h2>
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
<th scope="col">Status</th>
<th scope="col">Color</th>
<th scope="col">Price per day</th>
<th scope="col">Office ID</th>
<th scope="col">Is reserved</th>



</tr>
</thead>
<tbody>
<?php



?>
<?php if ($result->num_rows > 0): ?>
<?php while($array=mysqli_fetch_assoc($result)): ?>
<tr>
<th scope="row"><?php echo $array['car_id'];?></th>
<td><?php echo $array['plate_number'];?></td>
<td><?php echo $array['model'];?></td>
<td><?php echo $array['brand'];?></td>
<td><?php echo $array['year'];?></td>
<td><?php echo $array['status'];?></td>
<td><?php echo $array['color'];?></td>
<td><?php echo $array['price_per_day'];?></td>
<td><?php echo $array['office_id'];?></td>
<td><?php echo $array['is_reserved'];?></td>

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


