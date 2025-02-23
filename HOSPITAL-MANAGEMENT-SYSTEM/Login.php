<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="login.css">
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

    <div class="container" id="signup">
        <form action="register.php" method="post" class="form1">
            <h1>Register</h1>
            <div class="input">
                <label>Username : </label>
                    <input type="text" name="username" id="username" placeholder="Username" required>
                </div>
                <div class="input">
                    <label>Email : </label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
            <div class="input">
                <label>Password : </label>
                    <input type="text" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Sign up" name="signup">
        </form>

        <form action="register.php" method="post">
            <h1>Login</h1>
            <div class="login-input">
                <label>Email : </label>
            <input type="email" name="email" id="email">
            </div>
            <div class="login-input">
                <label>Password : </label>
            <input type="password" name="password" id="password">
            </div>
            <input type="submit" value="Sign In" name="signin" >
        </form>
    </div>
</body>
</html>