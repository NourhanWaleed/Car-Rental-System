<?php   


$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}
if (isset($_POST['add-car'])) {


    $plate_number = $_POST['plate_number'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price_per_day = $_POST['price_per_day'];
    $office_id = $_POST['office_id'];
     

    $sql = "INSERT INTO Car (plate_number,model,brand,`year`,color,price_per_day,office_id, status, is_reserved) VALUES 
    (".$plate_number.",'".$model."','".$brand."',".$year.",'".$color."',".$price_per_day.",".$office_id.", 'active', 'N')";

//echo $sql;


    $result = mysqli_query($conn, $sql);
    echo "<script>window.location.href = '../View/edit_car.php'; alert('Car added successfully');</script>";
}
?>