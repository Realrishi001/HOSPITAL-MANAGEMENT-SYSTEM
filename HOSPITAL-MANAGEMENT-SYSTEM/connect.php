<?php 

$host = "localhost";
$user = "root";
$pass = "";
$db = "healthcare";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Failed to connect to DB: " . $conn->connect_error);
}

// Handling form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_doctor'])) {
        $name = $_POST['name'];
        $specialization = $_POST['specialization'];
        $image = $_POST['image'];
        
        $stmt = $conn->prepare("INSERT INTO doctors (name, specialization, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $specialization, $image);
        $stmt->execute();
        $stmt->close();
    }

    if (isset($_POST['remove_doctor'])) {
        $name = $_POST['name'];
        
        $stmt = $conn->prepare("DELETE FROM doctors WHERE name = ?");
        $stmt->bind_param("s", $name);
        $stmt->execute();
        $stmt->close();
    }
}

// Fetch doctors from the database
$result = $conn->query("SELECT * FROM doctors");
$doctors = [];
while ($row = $result->fetch_assoc()) {
    $doctors[] = $row;
}
$conn->close();

?>