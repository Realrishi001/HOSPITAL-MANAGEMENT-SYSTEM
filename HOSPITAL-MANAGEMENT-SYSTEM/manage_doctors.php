<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Doctors</title>
</head>
<body>
    <h2>Add Doctor</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Doctor Name" required>
        <input type="text" name="specialization" placeholder="Specialization" required>
        <input type="text" name="image" placeholder="Image URL" required>
        <button type="submit" name="add_doctor">Add Doctor</button>
    </form>

    <h2>Remove Doctor</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Doctor Name" required>
        <button type="submit" name="remove_doctor">Remove Doctor</button>
    </form>
</body>
</html>
