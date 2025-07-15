<?php
 $servername ="localhost";
 $username = "root";
 $password = "";
 $database = "sneakerstore";

 $conn = new mysqli($servername, $username, $password, $database);

 if($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error-);
 }

 $name = $_POST['name']
 $phone =$_POST['phone']
 $adress =$_POST['adress']
 $card_number = $_POST['card_number']
 $expiry_month = $_POST['expiry_month']
 $expiry_year = $_POST['expiry_year']
 $cvv = $_POST['cvv']
 // Insert data into database
 $sql = "INSERT INTO payments (name, phone, adress, card_number, expiry_month', expiry_year, cvv)"
 VALUES ($name, $phone $adress , $card_number , $expiry_month ,$expiry_year,$cvv)

if ($conn->query($sql)=== TRUE) {
    echo "<script>alert('Checout complete');</script>";
    echo "<script>window.setTimeout(function(){ window.location.href = 'index.html;}, 1000;);</script>";
} else {
    echo "Error: ". $sql . "<br>" . $conn->error;
}