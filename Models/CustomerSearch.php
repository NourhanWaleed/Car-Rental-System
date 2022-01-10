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
     
    if (array_key_exists("status", $_POST)) {
        $status = $_POST['status'];

    } else {
        $status = NULL;
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
    
    if ($count == 0) {
        $sql = "SELECT * FROM car";
    } else {
        $sql = "SELECT * FROM car
        WHERE " . $query[$i];
        $i = $i + 1;
        while ($i < $count) {
            $sql = $sql . " AND " . $query[$i];
            $i = $i + 1;
        }
    }


    $result = mysqli_query($conn, $sql);
    $_SESSION['search_res'] = $result;
//    echo "<script>window.location.href = '../View/search_result.php';</script>";
}
?>