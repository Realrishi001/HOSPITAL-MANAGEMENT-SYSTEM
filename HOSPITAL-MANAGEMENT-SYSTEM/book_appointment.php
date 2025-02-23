<?php
// Include the database connection
include 'connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $speciality = $_POST['speciality'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $message = $_POST['message'];

    // Prepare the SQL query
    $insertQuery = "INSERT INTO appointments (name, email, phone, speciality, appointment_date, appointment_time, message) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssssss", $name, $email, $phone, $speciality, $date, $time, $message);

    // Execute the query and check for success
    if ($stmt->execute()) {
        // Store appointment details in the session
        $_SESSION['appointment'] = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'speciality' => $speciality,
            'date' => $date,
            'time' => $time,
            'message' => $message
        ];

        // Redirect to home.php
        header("Location: user.php");
        exit();
    } else {
        echo "<script>alert('Error booking appointment: " . $conn->error . "');</script>";
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
