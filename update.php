<?php
$conn = mysqli_connect('localhost', 'root', '', 'registration');

if (!$conn) {
    die("<script>alert('Connection to database failed.')</script>");
}

if (isset($_POST['update'])){
    $status = $_POST['status'];

    $sql = "UPDATE TABLE CAR
    SET status = $status
    WHERE /*condition*/";
}
?>