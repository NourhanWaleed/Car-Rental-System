<?php
class LoginModel{
	public function login(){
		$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

		if (!$conn) {
			die("<script>alert('Connection to database failed.')</script>");
		}

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM customer
			WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($conn, $sql);
			#if ($result->num_rows > 0) {
			#	while($row = mysqli_fetch_assoc($result)){
			#		echo $row['first_name'] . " " . $row['last_name'] . "<br>";
			#	}
			#} else {
			#	echo "<script>alert('email or password incorrect.')</script>";
			#}
		}
		return $result;
	}
}
?>