<?php
class login{
	public function login(){
		$conn = mysqli_connect('localhost', 'root', '', 'car-rental-system');

		if (!$conn) {
			die("<script>alert('Connection to database failed.')</script>");
		}

		if (isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			$sql = "SELECT * FROM users
			WHERE email='$email' AND password='$password'";
			$result = mysqli_query($conn, $sql);
			if ($result->num_rows > 0) {
				#redirect to user/admin page
			} else {
				echo "<script>alert('email or password incorrect.')</script>";
			}
		}
	}
}
?>