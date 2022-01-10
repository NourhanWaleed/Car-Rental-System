<?php   


$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}


    $query = array();
    $count = 0;
    $i = 0;
    $og_car_id = $_POST['car_id'];
    $car_id = $_POST['new_carid'];
    $plate_number = $_POST['new_plate_number'];
    $model = $_POST['new_model'];
    $brand = $_POST['new_brand'];
    $year = $_POST['new_year'];
    $color = $_POST['new_color'];
    $price_per_day = $_POST['new_priceperday'];
    $office_id = $_POST['new_office_id'];
     
    if (array_key_exists("new_status", $_POST)) {
        $status = $_POST['new_status'];

    } else {
        $status = NULL;
    }

    if (array_key_exists("new_is_reserved", $_POST)) {
        $is_reserved = $_POST['new_is_reserved'];

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
    
    if ($count == 0) {
        return;
    } else {
        $sql = "UPDATE car SET " . $query[$i];
        $i = $i + 1;
        while ($i < $count) {
            $sql = $sql . " AND " . $query[$i];
            $i = $i + 1;
        }
        $sql = $sql . " WHERE car_id = " . $og_car_id;
    }


mysqli_query($conn, $sql);
//    echo "<script>window.location.href = '../View/search_result.php';</script>";

?>