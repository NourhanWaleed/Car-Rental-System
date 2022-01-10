<?php
 
    session_start();

    
	$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

	if (!$conn) {
		die("<script>alert('Connection to database failed.');</script>");
        echo json_encode(array("statusCode"=>201));
	}

    $customer_id = $_SESSION['customer_id'];
    $car_id = $_POST['car_id'];
    $reserve_date = $_POST['reserve_date'];
    $return_date = $_POST['return_date'];

    $query="SELECT price_per_day FROM car WHERE car_id = ". $car_id; 
    $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $datetime1 = date_create($reserve_date);
        $datetime2 = date_create($return_date);
        $price_per_day = $row['price_per_day'];
    

    // Calculates the difference between DateTime objects
    $interval = date_diff($datetime1, $datetime2);

    // Printing result in years & months format
    $price = $price_per_day * ($interval->d + 1);
    echo $price;

    $payment_id = rand();

    $sql = "INSERT INTO payment(payment_id, payment_type, amount_paid, amount_remaining, total_amount) VALUES (".$payment_id.",'Credit', 0, ".$price.", ".$price.")";
    mysqli_query($conn, $sql);




    $sql = "INSERT INTO reservation(customer_id, car_id, reserve_date, return_date, payment_id) VALUES (".$customer_id.",".$car_id.",".date_format($datetime1,"Y/m/d").",".date_format($datetime2,"Y/m/d").",".$payment_id.")";
    mysqli_query($conn, $sql);

 





    $sql = "UPDATE car SET is_reserved = 'Y' WHERE car.car_id = " . $car_id;
    mysqli_query($conn, $sql);

    // if ($result) {
    //     echo json_encode(array("statusCode"=>200));
        
    // } else {
    //     echo json_encode(array("statusCode"=>201));
    // }
    mysqli_close($conn);


?>