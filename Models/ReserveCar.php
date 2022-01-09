<?php
 
    
	$conn = mysqli_connect('localhost', 'root', 'root', 'car_rental_system');

	if (!$conn) {
		die("<script>alert('Connection to database failed.');</script>");
        echo json_encode(array("statusCode"=>201));
	}

    $customer_id = $_POST['customer_id'];
    $car_id = $_POST['car_id'];

    $sql = "INSERT INTO reservation('customer_id', 'car_id', 'reserve_date', 'return_date') VALUES (".$customer_id.",".$car_id.",'2021-12-15','2022-1-15')";
    $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     echo json_encode(array("statusCode"=>200));
        
    // } else {
    //     echo json_encode(array("statusCode"=>201));
    // }
    mysqli_close($conn);


?>