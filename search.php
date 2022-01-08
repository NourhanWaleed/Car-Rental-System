<?php
$conn = mysqli_connect('localhost', 'root', '', 'car-rental-system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

if (isset($_POST['search'])) {
	$sql = "SELECT * FROM CAR
	WHERE /*condition*/";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
        #show search results
	} else {
		echo "<script>alert('Error.')</script>";
	}
}
?>