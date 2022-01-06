<?php
$conn = mysqli_connect('localhost', 'root', '', 'registration');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

if (isset($_POST['submit'])) {
    $plate_number = $_POST['plate_number'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $year = $_POST['year'];
    $status = $_POST['status'];
    $color = $_POST['color'];
    $price_per_day = $_POST['price_per_day'];

    if($plate_number == NULL){
        echo "<script>alert('Plate number field empty.')</script>";
    }
    else if($model == NULL){
        echo "<script>alert('Model field empty.')</script>";
    }
    else if($brand == NULL){
        echo "<script>alert('Brand field empty.')</script>";
    }
    else if($year == NULL){
        echo "<script>alert('Year field empty.')</script>";
    }
    else if($status == NULL){
        echo "<script>alert('Status field empty.')</script>";
    }
    else if($color == NULL){
        echo "<script>alert('Color field empty.')</script>";
    }
    else if($price_per_day == NULL){
        echo "<script>alert('Price per day field empty.')</script>";
    }
	else {
		$sql = "INSERT INTO Car(plate_number,model,brand,`year`,status,color,price_per_day)
        VALUES ('$plate_number','$model','$brand','$year','$status','$color','$price_per_day')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			#redirect to admin page
		} else {
			echo "<script>alert('Error.')</script>";
		}
    }
} 
?>