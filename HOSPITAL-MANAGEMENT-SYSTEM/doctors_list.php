<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctors List</title>
</head>
<body>
    <h2>Doctors List</h2>
    <div>
        <?php foreach ($doctors as $doctor): ?>
            <div>
                <img src="<?php echo htmlspecialchars($doctor['image']); ?>" alt="<?php echo htmlspecialchars($doctor['name']); ?>" width="100">
                <h3><?php echo htmlspecialchars($doctor['name']); ?></h3>
                <p><?php echo htmlspecialchars($doctor['specialization']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>