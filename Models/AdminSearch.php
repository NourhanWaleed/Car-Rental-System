<?php   
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}
if (isset($_POST['search'])) {

    $query = array();
    $count = 0;
    $i = 0;
    $car_id = $_POST['car_id'];
    $plate_number = $_POST['plate_number'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price_per_day = $_POST['price_per_day'];
    $office_id = $_POST['office_id'];

    $cust_id = $_POST["cust_id"];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $balance = $_POST['balance'];

    $reserve_id = $_POST['reservation_id'];
    $reserve_date = $_POST['reservation_date'];
    $return_date = $_POST['return_date'];
    $payment_id = $_POST['payment_id'];
     
    if (array_key_exists("status", $_POST)) {
        $status = $_POST['status'];

    } else {
        $status = NULL;
    }
    if (array_key_exists("gender", $_POST)) {
        $gender = $_POST['gender'];

    } else {
        $gender = NULL;
    }

    if (array_key_exists("is_reserved", $_POST)) {
        $is_reserved = $_POST['is_reserved'];

    } else {
        $is_reserved = NULL;
    }

    if ($car_id != NULL) {
        $query[$count] = "car_id = '$car_id'";
        $count = $count + 1;
    }
    if ($plate_number != NULL) {
        $query[$count] = "plate_number = '$plate_number'";
        $count = $count + 1;
    }
    if ($model != NULL) {
        $query[$count] = "model = '$model'";
        $count = $count + 1;
    }
    if ($brand != NULL) {
        $query[$count] = "brand = '$brand'";
        $count = $count + 1;
    }
    if ($year != NULL) {
        $query[$count] = "'year' = '$year'";
        $count = $count + 1;
    }
    if ($status != NULL) {
        $query[$count] = "status = '$status'";
        $count = $count + 1;
    }
    if ($color != NULL) {
        $query[$count] = "color = '$color'";
        $count = $count + 1;
    }
    if ($price_per_day != NULL) {
        $query[$count] = "price_per_day = '$price_per_day'";
        $count = $count + 1;
    }
    if ($office_id != NULL) {
        $query[$count] = "office_id = '$office_id'";
        $count = $count + 1;
    }
    if ($is_reserved != NULL) {
        $query[$count] = "is_reserved = '$is_reserved'";
        $count = $count + 1;
    }

    if ($cust_id != NULL) {
        $query[$count] = "customer_id = '$cust_id'";
        $count = $count + 1;
    }
    
    if ($first_name != NULL) {
        $query[$count] = "first_name = '$first_name'";
        $count = $count + 1;
    }
    
    if ($last_name != NULL) {
        $query[$count] = "last_name = '$last_name'";
        $count = $count + 1;
    }
    
    if ($date_of_birth != NULL) {
        $query[$count] = "date_of_birth = '$date_of_birth'";
        $count = $count + 1;
    }
    
    if ($email != NULL) {
        $query[$count] = "email = '$email'";
        $count = $count + 1;
    }
    
   
    
    if ($balance != NULL) {
        $query[$count] = "balance = '$balance'";
        $count = $count + 1;
    }
    
    if ($reserve_id != NULL) {
        $query[$count] = "reservation_id = '$reserve_id'";
        $count = $count + 1;
    }
    
    if ($reserve_date != NULL) {
        $query[$count] = "reservation_date = '$reserve_date'";
        $count = $count + 1;
    }
    
    if ($return_date != NULL) {
        $query[$count] = "return_date = '$return_date'";
        $count = $count + 1;
    }
    
    if ($payment_id != NULL) {
        $query[$count] = "payment_id = '$payment_id'";
        $count = $count + 1;
    }
    
    if ($count == 0) {
        $sql = "SELECT * FROM car NATURAL JOIN customer NATURAL JOIN reservation";
    } else {
        $sql = "SELECT * FROM car NATURAL JOIN customer NATURAL JOIN reservation
        WHERE " . $query[$i];
        $i = $i + 1;
        while ($i < $count) {
            $sql = $sql . " AND " . $query[$i];
            $i = $i + 1;
        }
    }


    $result = mysqli_query($conn, $sql);
//    echo "<script>window.location.href = '../View/search_result.php';</script>";
}
?>