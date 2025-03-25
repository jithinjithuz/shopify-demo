<?php
// Include the database connection file
include('includes/db.php');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect and sanitize the input
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query to insert data
    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Registration successful
        echo "<div class='alert alert-success'>Registration successful. <a href='login.php'>Login here</a></div>";
    } else {
        // Error during insertion
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }

    // Close the database connection
    $conn->close();
}
?>
<?php include('includes/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card shadow-lg p-4" style="max-width: 400px; width: 100%; border-radius: 15px; background-color: #f8f9fa;">
            <h2 class="text-center mb-4">Register</h2>
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
            <p class="mt-3 text-center">Already have an account? <a href="login.php">Login here</a></p>
        </div>
    </div>
</body>
</html>
