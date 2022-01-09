<?php
$conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

if (!$conn) {
    die("<script>window.location.href = '../View/register.php'; alert('Connection to database failed.')</script>");
} 

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $date_of_birth = $_POST['date_of_birth'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $balance = $_POST['balance'];

    $sql = "SELECT * FROM Customer WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO Customer(first_name,last_name,gender,date_of_birth,email,password,balance)
        VALUES('$first_name', '$last_name', '$gender', '$date_of_birth', '$email', '$password', '$balance')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>window.location.href = '../View/register.php'; alert('Sign up success')</script>";
            
        } else {
            echo "<script>window.location.href = '../View/register.php'; alert('Error.')</script>";
        }
    } else {
        echo "<script>window.location.href = '../View/register.php'; alert('Email Already Exists.')</script>";
    }
    return $result;
}

?>