<?php
	$conn = mysqli_connect('localhost', 'root', 'root', 'car_rental_system');

	if (!$conn) {
		die("<script>alert('Connection to database failed.')</script>");
	}

	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM customer
		WHERE email = '$email' AND password = '$password'";
		$result = mysqli_query($conn, $sql);
		if ($result->num_rows > 0) {
			#TODO: query for users id (or use email) and redirect to their page
			$row = mysqli_fetch_assoc($result);
			$customer_id = $row["customer_id"]; 
			$first_name = $row['first_name'];
			$last_name = $row['last_name']; 
			session_start();
			$_SESSION['customer_id'] = $customer_id;
			$_SESSION['name'] = $first_name.' '.$last_name;
			header('Location: ../View/customer_portal.php');
			/*
			?>
			<html>
			<body>
			
			<form action="../View/customer_portal.php" method="POST">
			<input type="hidden" name="customer_id" value="<?php echo $customer_id ?>"><br>
			<input type="hidden" name="first_name" value="<?php echo $first_name ?>"><br>
			<input type="hidden" name="last_name"  value="<?php echo $last_name ?>"><br>
			<input type="submit">
			</form>
			
			</body>
			</html> 
			<?php */
		} else {
			echo "<script>window.location.href = '../View/login.php'; alert('Email or password incorrect.')</script>";
		}
		#if ($result->num_rows > 0) {
		#	while($row = mysqli_fetch_assoc($result)){
		#		echo $row['first_name'] . " " . $row['last_name'] . "<br>";
		#	}
		#} else {
		#	echo "<script>alert('email or password incorrect.')</script>";
		#}
	}
?>