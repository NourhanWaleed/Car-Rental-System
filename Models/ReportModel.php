<?php
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

$result = NULL;

if (isset($_POST['status'])) {
    $sql = "SELECT C.car_id, C.brand, C.model, C.is_reserved FROM Car C";
    $result = mysqli_query($conn, $sql);
}
else if(isset($_POST['report_1'])){
    $reserve_date = $_POST['reserve_date'];
    $return_date = $_POST['return_date'];

    $sql = "SELECT * FROM CUSTOMER C
    JOIN RESERVATION R ON U.user_id=R.user_id
    JOIN CAR C ON R.car_id=C.car_id
    JOIN Payment P ON R.payment_id=P.payment_id
    WHERE R.reserve_date < '$reserve_date' AND R.return_date > '$return_date'";
    $result = mysqli_query($conn, $sql);
}
else if(isset($_POST['report_2'])){
    $reserve_date = $_POST['reserve_date'];
    $return_date = $_POST['return_date'];

    $sql = "SELECT * FROM RESERVATION R
    JOIN CAR C ON R.car_id=C.car_id
    WHERE R.reserve_date < '$reserve_date' AND R.return_date > '$return_date'";
    $result = mysqli_query($conn, $sql);
}
else if(isset($_POST['report_3'])){
    $reserve_date = $_POST['reserve_date'];
    $return_date = $_POST['return_date'];

    $sql = "SELECT CS.first_name, CS.last_name, CS.email,CS.birth_date, C.model, C.plate_number, P.amount_paid,P.amount_remaining
    FROM CUSTOMER CS
    JOIN RESERVATION R ON CS.customer_id=R.customer_id
    JOIN CAR C ON C.car_id=R.car_id
    JOIN Payment P on R.payment_id=P.payment_id
    WHERE CS./*condition*/ AND R.reserve_date >= '$reserve_date' AND R.return_date <= '$return_date' AND U.is_admin='N'";
    $result = mysqli_query($conn, $sql);
}

$_SESSION['report_res'] = $result;
?>