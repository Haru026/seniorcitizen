<?php
// Database connection details
$host = 'localhost'; // or your server IP
$user = 'root'; // database username
$pass = '12345'; // database password
$db = 'senior_list'; // database name

// Create connection
$conn= new mysqli('$host, $user, $pass, $db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and get form data
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $date_of_birth = $conn->real_escape_string($_POST['date_of_birth']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $address = $conn->real_escape_string($_POST['address']);
    $contact_number = $conn->real_escape_string($_POST['contact_number']);
    $email = $conn->real_escape_string($_POST['email']);

    // Check if all fields are filled
    if (empty($first_name) || empty($last_name) || empty($date_of_birth) || empty($gender) || empty($address) || empty($contact_number) || empty($email)) {
        echo "Please fill out all fields.";
    } else {
        // Prepare the SQL statement using prepared statements to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO senior_list (first_name, last_name, date_of_birth, gender, address, contact_number, email) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        // Bind parameters to the prepared statement
        $stmt->bind_param("sssssss", $first_name, $last_name, $date_of_birth, $gender, $address, $contact_number, $email);
        
        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "New senior citizen registered successfully!";
            
            // Redirect to a confirmation or resident list page (optional)
            header("Location: resident_list.php");
            exit(); // Don't forget to call exit() after the redirect
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and the connection
        $stmt->close();
        $conn->close();
    }
}
?>
