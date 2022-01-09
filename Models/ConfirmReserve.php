<?php 


$conn = mysqli_connect('localhost', 'root', 'root', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.');</script>");
    echo json_encode(array("statusCode"=>201));
}

$car_id = $_POST['car_id'];
$sql = "SELECT price_per_day from Car where car_id = ". $car_id;
$result = mysqli_query($conn, $sql);
return $result;
?>