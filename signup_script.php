<?php 
require 'includes/common.php';
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  echo "Incorrect email";
}
$password = $_POST['password'];
if (strlen($password) < 6) {
  echo "Password should have at-least 6 characters";
}

$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);

$name = mysqli_real_escape_string($con, $_POST["name"]);
$contact = mysqli_real_escape_string($con, $_POST["contact"]);
$city = mysqli_real_escape_string($con, $_POST["city"]);
$address = mysqli_real_escape_string($con, $_POST["address"]);

$query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
$query2 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hashed_password', '$contact', '$city', '$address')";

$result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }
    else{

    	$result = mysqli_query($con, $query2);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($con);

        header("location: products.php");
    }
 ?>