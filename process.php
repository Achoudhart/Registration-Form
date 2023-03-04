<?php
// database credentials
$host = "localhost";
$user = "root";
$password = "root";
$db_name = "users";

// establish database connection
$conn = mysqli_connect($host, $user, $password, $db_name);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve form data
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    
    // validate form data
    // ... insert validation code here ...
    
    // insert data into database
    $sql = "INSERT INTO users (first_name, last_name, dob, email, password, phone) 
            VALUES ('$first_name', '$last_name', '$dob', '$email', '$password', '$phone')";
    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully.";
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// close database connection
mysqli_close($conn);
?>
