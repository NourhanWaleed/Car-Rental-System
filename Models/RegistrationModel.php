<?php
class RegistrationModel{
    public function customer_registration(){
        $conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

        if (!$conn) {
            die("<script>alert('Connection to database failed.')</script>");
        }

        if (isset($_POST['submit'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gender = $_POST['gender'];
            $date_of_birth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $balance = $_POST['balance'];

            if($first_name == NULL){
                echo "<script>alert('First name field empty.')</script>";
            }
            else if($last_name == NULL){
                echo "<script>alert('Last name field empty.')</script>";
            }
            else if($gender == NULL){
                echo "<script>alert('gender field empty.')</script>";
            }
            else if($date_of_birth == NULL){
                echo "<script>alert('Date of birth field empty.')</script>";
            }
            else if($email == NULL){
                echo "<script>alert('Email field empty.')</script>";
            }
            else if($password == NULL){
                echo "<script>alert('Password field empty.')</script>";
            }
            else if($balance == NULL){
                echo "<script>alert('Balance field empty.')</script>";
            }
            else {
                $sql = "SELECT * FROM Customer WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO Customer(first_name,last_name,gender,date_of_birth,email,password,balance)
                    VALUES('$first_name', '$last_name', '$gender', '$date_of_birth', '$email', '$password', '$balance')";
                    $result = mysqli_query($conn, $sql);
                    #if ($result) {
                        #redirect to user page
                    #} else {
                    #    echo "<script>alert('Error.')</script>";
                    #}
                } else {
                    echo "<script>alert('Email Already Exists.')</script>";
                }
                return $result;
            } 
        }
    }

    public function car_registration(){
        $conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

        if (!$conn) {
            die("<script>alert('Connection to database failed.')</script>");
        }

        if (isset($_POST['submit'])) {
            $plate_number = $_POST['plate_number'];
            $model = $_POST['model'];
            $brand = $_POST['brand'];
            $year = $_POST['year'];
            $status = $_POST['status'];
            $color = $_POST['color'];
            $price_per_day = $_POST['price_per_day'];

            if($plate_number == NULL){
                echo "<script>alert('Plate number field empty.')</script>";
            }
            else if($model == NULL){
                echo "<script>alert('Model field empty.')</script>";
            }
            else if($brand == NULL){
                echo "<script>alert('Brand field empty.')</script>";
            }
            else if($year == NULL){
                echo "<script>alert('Year field empty.')</script>";
            }
            else if($status == NULL){
                echo "<script>alert('Status field empty.')</script>";
            }
            else if($color == NULL){
                echo "<script>alert('Color field empty.')</script>";
            }
            else if($price_per_day == NULL){
                echo "<script>alert('Price per day field empty.')</script>";
            }
            else {
                $sql = "INSERT INTO Car(plate_number,model,brand,`year`,status,color,price_per_day)
                VALUES ('$plate_number','$model','$brand','$year','$status','$color','$price_per_day')";
                $result = mysqli_query($conn, $sql);
                #if ($result) {
                    #redirect to admin page
                #} else {
                #    echo "<script>alert('Error.')</script>";
                #}
                return $result;
            }
        } 
    }
}
?>