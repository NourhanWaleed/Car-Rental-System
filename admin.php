<?php
$conn = mysqli_connect('localhost', 'root', '', 'car-rental-system');

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
if(isset($_POST['report_3'])){
    $reserve_date = $_POST['reserve_date'];
    $rent_date = $_POST['rent_date'];

    $sql = "SELECT CS.first_name, CS.last_name, CS.email,CS.birth_date, C.model, C.plate_number, P.amount_paid,P.amount_remaining
    FROM CUSTOMER CS
    JOIN RESERVATION R ON CS.customer_id=R.customer_id
    JOIN CAR C ON C.car_id=R.car_id
    JOIN Payment P on R.payment_id=P.payment_id
    WHERE CS./*condition*/ AND R.reserve_date >= '$reserve_date' AND R.rent_date <= '$rent_date' AND U.is_admin='N'";
}
?>