<?php
$servername = "localhost";
$username = "root";
$password = "Root@123";
$dbname = "temples";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name1 =$_REQUEST['name1'];
$email = $_REQUEST['email'];
$password1= $_REQUEST['password1'];
$phone = $_REQUEST['phone'];
$adhaar = $_REQUEST['adhaar'];
$address1 = $_REQUEST['address1'];
$temples = $_REQUEST['temples'];
$persons = $_REQUEST['persons'];
$package = $_REQUEST['package'];
$payment = $_REQUEST['payment'];

$sql="INSERT INTO users (name1, email, password1, phone, adhaar, address1, temple, persons, package, paymentmode) VALUES ( '$name', '$email','$password1', '$phone', '$adhaar', '$address1', '$temples', '$persons', '$package', '$payment')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted Successfully!<br />";
    $sql= "SELECT * FROM users";
    $result=$conn->query($sql);
    echo "$result";
    echo "Record inserted Successfully!<br />";
    echo "<script>alert('Registration successful!'); </script>";
    echo "<script>alert($result); </script>";
    /*echo "<script>window.location = '2_Home Page.html'; </script>";*/
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>