<?php
session_start();

// Check if the user is logged in (optional, if you have a login system)
if (!isset($_SESSION['email'])) {
    header("Location: LoginSignUp.html");
    exit();
}

// Check if an appointment was recently booked
$appointment = isset($_SESSION['appointment']) ? $_SESSION['appointment'] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="Home.css">
    <link rel="stylesheet" href="user.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
<!-- Navbar -->
    
<div class="navbar">
        <div class="left">
            <a href="Home.html"><img src="./Assets/HEATLH.png" alt="HealthCareLogo"></a>
        </div>
        <div class="middle">
            <ul>
                <li><a href="Home.html">HOME</a></li>
                <li><a href="Doctors.html">DOCTORS</a></li>
                <li><a href="Aboutus.html">ABOUT</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </div>
        <div class="right">
            <a href="Login.php"><button type="button"><img src="./Assets/upload_area.png" alt=""></button></a>
        </div>
    </div>

    <div class="details">
    <h1>Welcome to Healthcare</h1>

<?php if ($appointment): ?>
    <h2>Appointment Details</h2>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($appointment['name']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($appointment['email']); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($appointment['phone']); ?></p>
    <p><strong>Speciality:</strong> <?php echo htmlspecialchars($appointment['speciality']); ?></p>
    <p><strong>Appointment Date:</strong> <?php echo htmlspecialchars($appointment['date']); ?></p>
    <p><strong>Preferred Time:</strong> <?php echo htmlspecialchars($appointment['time']); ?></p>
    <p><strong>Additional Notes:</strong> <?php echo htmlspecialchars($appointment['message']); ?></p>
<?php else: ?>
    <p>No recent appointment found.</p>
<?php endif; ?>

<a href="logout.php"><button>Logout</button></a>
    </div>
</body>
</html>
