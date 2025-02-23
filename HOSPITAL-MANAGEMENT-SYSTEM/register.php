<?php
include 'connect.php';
session_start();

if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        $insertQuery = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        if ($conn->query($insertQuery) === TRUE) {
            echo "Registration Successful! You can now log in.";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        header("Location: user.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password.";
    }
}
?>
