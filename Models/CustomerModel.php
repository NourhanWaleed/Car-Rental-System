<?php
class CustomerModel{
    public function search(){
        $conn = mysqli_connect('localhost', 'root', '', 'car_rental_system');

        if (!$conn) {
            die("<script>alert('Connection to database failed.')</script>");
        }

        if (isset($_POST['search'])) {
            $sql = "SELECT * FROM CAR
            WHERE /*condition*/";
            $result = mysqli_query($conn, $sql);
            return $result;
            #if ($result->num_rows > 0) {
                #show search results
            #} else {
            #    echo "<script>alert('Error.')</script>";
            #}
        }
    }
}
?>