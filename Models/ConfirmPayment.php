<?php 


	$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

	if (!$conn) {
		die("<script>alert('Connection to database failed.');</script>");
        echo json_encode(array("statusCode"=>201));
	}

    $payment_id = $_POST['payment_id'];
    $amount_tobepaid = $_POST['amount_paid'];

    $sql = "SELECT * FROM payment WHERE payment_id =".$payment_id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $amount_paid = $row['amount_paid'];
    $amount_remaining = $row['amount_remaining'];
    $total_amount = $row['total_amount'];

    $amount_paid = $amount_paid + $amount_tobepaid;
    if ($amount_paid > $total_amount) {
        $amount_paid = $total_amount;
        $amount_remaining = 0;
    } else {
        $amount_remaining = $total_amount - $amount_paid;
    }

    $sql = "UPDATE payment SET amount_paid = ".$amount_paid.", amount_remaining = ".$amount_remaining." WHERE payment_id = ".$payment_id;
    mysqli_query($conn, $sql);

    $sql = "SELECT customer_id, balance FROM customer WHERE customer_id in 
    (SELECT customer_id FROM reservation JOIN payment on reservation.payment_id = payment.payment_id 
    WHERE payment_id = $payment_id)";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $customer_id = $row['customer_id'];
    $sql = "UPDATE customer SET balance = balance - ".$amount_paid." WHERE customer_id = $customer_id";
    mysqli_close($conn);

?>