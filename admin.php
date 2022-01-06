<?php
$conn = mysqli_connect('localhost', 'root', '', 'registration');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}
if (isset($_POST['status'])) {
    $sql = "SELECT C.status FROM Car C";
}
if(isset($_POST['report_1'])){
    $reserve_date = $_POST['reserve_date'];
    $rent_date = $_POST['rent_date'];

    $sql = "SELECT * FROM CUSTOMER C
    JOIN RESERVATION R ON U.user_id=R.user_id
    JOIN CAR C ON R.car_id=C.car_id
    JOIN Payment P ON R.payment_id=P.payment_id
    WHERE R.reserve_date < '$reserve_date' AND R.rent_date > '$rent_date'";
}
if(isset($_POST['report_2'])){
    $reserve_date = $_POST['reserve_date'];
    $rent_date = $_POST['rent_date'];

    $sql = "SELECT * FROM RESERVATION R
    JOIN CAR C ON R.car_id=C.car_id
    WHERE R.reserve_date < '$reserve_date' AND R.rent_date > '$rent_date'";
}
?>